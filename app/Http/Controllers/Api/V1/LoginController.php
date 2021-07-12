<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\ApiLoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fb_params = array(
            'client_id' => '194647745848924',
            'redirect_uri' => 'http://localhost:8000/api/auth=fb',
            'scope' => 'email',
            'response_type' => 'code',
            'state' => '123',
        );


        $google_params = array(
            'client_id' => '129067844799-75k5j7q6dumo4cepigjr84ne1n86bdqs.apps.googleusercontent.com',
            'redirect_uri' => 'https://drafter.ru/auth=gmail',
            'scope' => 'email',
            'response_type' => 'code',
            'state' => '123'
        );


        $vk_params = array(
            'client_id' => '7868487',
            'redirect_uri' => 'https://drafter.ru/auth=vk',
            'scope' => 'email, name',
            'response_type' => 'code',
            'state' => '123'
        );


        return response()->json([
           "fb_params"      => $fb_params,
            "google_params" => $google_params,
            "vk_params"     => $vk_params
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function login_use_soc($auth)
    {
        if (strlen($auth) > 0) {

            // Facebook login
            if ($auth == 'fb') {
                $params = array(
                    'client_id' => '194647745848924',
                    'client_secret' => 'db7dc24d62c1ac6f01e4c219eac9bb7a',
                    'redirect_uri' => 'http://localhost:8000/api/auth=fb',
                    'code' => $_GET['code']
                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/oauth/access_token?' . urldecode(http_build_query($params)));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $data = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($data, true);

                if (isset($data['error'])) {
                    return response()->json([
                        "error" => $data['error']
                    ]);
                }

                if (!empty($data['access_token'])) {
                    $params = array(
                        'access_token' => $data['access_token'],
                        'fields' => 'id,email,first_name,last_name,picture'
                    );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me?' . urldecode(http_build_query($params)));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $info = curl_exec($ch);
                    curl_close($ch);
                    $info       = json_decode($info, true);
                    $user_email = '';


                    if(!empty($info)) {

                        if(isset($info['email'])) {

                            $user_email = $info['email'];
                            $user       = User::where('email', '=', $user_email)->first();
                            if (empty($user)) {

                                //register user
                                $name        = isset($info['first_name']) && strlen($info['first_name']) > 0 ? $info['first_name'] : '';
                                $surname     = isset($info['last_name']) && strlen($info['last_name']) > 0 ? $info['last_name'] : '';
                                $insert_data = ['email'=>$user_email,'name' => $name , 'surname' => $surname, 'fullname' => $name.' '.$surname, 'password' => 'drafterdefaultpassword'];
                                $user 		 = User::create($insert_data);

                                return $user->createToken('device_name')->plainTextToken;
                            }else{
                                return $user->createToken('device_name')->plainTextToken;
                            }

                        } else {
                            return response()->json([
                                "email error" => "User email is not found"
                            ],404);
                        }

                    } else {
                        return response()->json([
                           "error" => "User info is not found"
                        ],404);
                    }


                } else {
                    return response()->json([
                       "error" => "access token is not found"
                    ],404);
                }

            }

            elseif ($auth == 'vk') {

                // VK START

                $params_vk = array(
                    'client_id' => '7868487',
                    'client_secret' => '54XEBjTlHFNsLydC2Ip9',
                    'redirect_uri' => 'https://drafter.ru/auth=vk',
                    'code' => $_GET['code']
                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://oauth.vk.com/access_token?' . urldecode(http_build_query($params_vk)));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $data = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($data, true);
                if (isset($data['error'])) {
                    Session::put('vk_login_error', 'true');
                    return redirect('/login');
                }


                if (!empty($data['access_token']) && isset($data['email']) && !empty($data['email']) ) {

                    $params = array(
                        'v' => '5.52',
                        'uids' => $data['user_id'],
                        'access_token' => $data['access_token'],
                        'fields' => 'photo_big',
                    );

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://api.vk.com/method/users.get?' . urldecode(http_build_query($params)));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $info = curl_exec($ch);
                    curl_close($ch);
                    $info       = json_decode($info, true);
                    $user_email = $data['email'];
                    if(!empty($info) && isset($info['response']) && !empty($info['response'])) {

                        $user = User::where('email', '=', $user_email)->first();

                        if (empty($user)) {

                            //register user

                            $name 		 = isset($info['response'][0]['first_name']) && strlen($info['response'][0]['first_name']) > 0 ? $info['response'][0]['first_name'] : '';
                            $surname     = isset($info['response'][0]['last_name']) && strlen($info['response'][0]['last_name']) > 0 ? $info['response'][0]['last_name'] : '';
                            $insert_data = ['email'=>$user_email,'name' => $name , 'surname' => $surname, 'fullname' => $name.' '.$surname,'password' => 'drafterdefaultpassword'];
                            $user 		 = User::create($insert_data);

                            auth()->login($user);

                            return redirect('/profile');
                        }

                        elseif(Auth::loginUsingId($user->id)){
                            return redirect('/profile');
                        }

                    } else {
                        Session::put('vk_login_error', 'true');
                        return redirect()->route('login');
                    }


                } else {
                    return redirect()->route('login')->withErrors([
                        'vk_login_error' => 'У вас не верифицированный аккаунт в ВК'
                    ]);
                }


                // VK END

            }

            elseif ($auth == 'gmail') {
                $params_google = array(
                    'client_id' => '129067844799-75k5j7q6dumo4cepigjr84ne1n86bdqs.apps.googleusercontent.com',
                    'client_secret' => 'C-kuK0UE77C1VOignSXJgCig',
                    'redirect_uri' => 'https://drafter.ru/auth=gmail',
                    'grant_type' => 'authorization_code',
                    'code' => $_GET['code']
                );

                $ch = curl_init('https://accounts.google.com/o/oauth2/token');

                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params_google);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HEADER, false);

                $data_google = curl_exec($ch);
                $data_google = json_decode($data_google, true);

                // dd($data_google);


                if (!empty($data_google['access_token'])) {
                    // Токен получили, получаем данные пользователя.

                    $params_google = array(
                        'access_token' => $data_google['access_token'],
                        'id_token' => $data_google['id_token'],
                        'token_type' => 'Bearer',
                        'expires_in' => 3599
                    );


                    $info_google = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params_google)));
                    $userinfo= json_decode($info_google);
                    $user_email = $userinfo->email;
                    $user = User::where('email', '=', $user_email)->first();
                    if (empty($user)) {
                        $name = 'John';
                        $surname = 'Doe';
                        $phone = '798968585';
                        //register user

                        // $name        = isset($info['response'][0]['first_name']) && strlen($info['response'][0]['first_name']) > 0 ? $info['response'][0]['first_name'] : '';
                        // $surname     = isset($info['response'][0]['last_name']) && strlen($info['response'][0]['last_name']) > 0 ? $info['response'][0]['last_name'] : '';
                        // $phone       = isset($info['response'][0]['phone']) && strlen($info['response'][0]['phone']) > 0 ? $info['response'][0]['phone'] : ' ';
                        $insert_data = ['email'=>$user_email,'name' => $name , 'surname' => $surname, 'fullname' => $name.' '.$surname, 'phone'=> $phone, 'password' => 'drafterdefaultpassword'];
                        $user        = User::create($insert_data);
                        auth()->login($user);

                        return redirect('/profile');
                    }

                    elseif(Auth::loginUsingId($user->id)){
                        return redirect('/profile');
                    }


                } else {
                    return redirect()->route('login');
                }



            }

        }else{
            return response()->json([
               "Error" => "Soc site is not found"
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(ApiLoginRequest $request)
        {
            $email       =  request()->input('email');
            $password    =  request()->input('password');
            $user =    User::where( 'email' ,$email )->first();
            if (!$user || !Hash::check($password,$user->password ))
            {
                throw ValidationException::withMessages([ 'email' => 'Пользователь не найден' ]);
            }
            return $user->createToken($request->device_name)->plainTextToken;
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        if($user =  auth('sanctum')->user()){
            $user->currentAccessToken()->delete();
            return response()->json([
                "success" => "user was successfully logged out"
            ]);
        }else{
            return response()->json([
                "error" => "Logged in user is not found"
            ]);
        }


    }
}
