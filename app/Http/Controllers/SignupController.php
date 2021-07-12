<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Concerns\FilterEmailValidation;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use DateTime;

class SignupController extends Controller
{
    public function index()
    {

        if (Auth::user()) {
            return  redirect()->route('profile.index');
        } else {
             return view('signup');

        }

    }
    public function beck_to_signup()
    {
        $k = session()->get('after_registration');
        Session::forget('after_registration');
        Session::flash('aft_r',$k);
        return redirect()->route('register_index');
    }
    public function send_online_review()
    {

        if(Cookie::get('online_review')) {
            return "true";
        }else{
            return "false";
        }

    }

    // step 2 registration
    public function confirmation_register(Request $request)
    {

        // dd(Session::get('register_confirmation_code'));

        if (session()->has('signup_process') && session()->has('signup_step2') && session()->has('register_confirmation_code')) {

            return view('confirmation_register');


        } else {

            return redirect()->route('signup');
        }
    }



    public function left_time_for_confirmation_register_time(Request $request) {

        $end_date = Cookie::get('left_time_for_confirmation_register_time');

        if (empty($end_date)) {

            return response()->json(['timer'=>'false']);

        } else {

            $start_date  = new DateTime(date('Y-m-d h:i:s'));
            $since_start = $start_date->diff(new DateTime($end_date));
            $s = $since_start->s < 10 ? '0'.$since_start->s  : $since_start->s;

            return response()->json([
                'timer'=>'true',
                'message' => 'Повторное отправка СМС будет доступно через '.$since_start->i.':'.$s
            ]);

        }

    }





    public function register_successfully()
    {
        if (session()->has('show_register_successfully')) {
            return view('log_in_successfully');
        } else {
            return redirect()->route('signup');
        }
    }


    public function use_the_service()
    {
        if (session()->has('register_user_email_in_process')) {
            // delete show register successfully
            session()->forget('show_register_successfully');

            return view('use_the_service');

        } else {
            return redirect()->route('signup');
        }
    }


    public function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool
    {
        return preg_match('/^[0-9]{' . $minDigits . ',' . $maxDigits . '}\z/', $s);
    }

    public function signup(Request $request)
    {
        $messages = [
            'name.required' => 'Обязательное поле',
            'surname.required' => 'Обязательное поле',
            'phone.required' => 'Обязательное поле',
            'phone.unique' => 'Пользователь с таким номером существует на платформе',
            'phone.min' => 'В телефоне должно быть не менее 10 символов',
            'email.unique' => 'Пользователь с такой почтой существует на платформе',
            'email.required' => 'Обязательное поле',
            'email.email' => 'Электронная почта должна быть действующим адресом электронной почты',
            'password.required' => 'Обязательное поле',
            'password.confirmed' => 'Пароли не совпадают',
            'password.min' => 'Пароль должен состоять минимум из 4 символов',
            'password_confirmation.min' => 'Подтверждение пароля должно состоять минимум из 4 символов',
            'password_confirmation.required' => 'Поле для подтверждения пароля обязательно',
            'policy.required' => 'Подтвердите',


        ];

        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|min:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:4|confirmed',
            'password_confirmation' => 'required| min:4',
            'policy' => 'required'
        ], $messages);
//        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
//
//        } else {
//            return back()->with('error_email', "не является действительным адресом электронной почты");
//        }
        $insert_data = [
            'name' => request()->input('name'),
            'surname' => request()->input('surname'),
            'fullname' => request()->input('name') . ' ' . request()->input('surname'),
            'phone' => request()->input('phone'),
            'email' => request()->input('email'),
            'role_id' => '1',
            'password' => Hash::make(request()->input('password')),
        ];

        Session::put('after_registration', $insert_data);

        if(request()->input('phone')!=$insert_data['phone']){
            unset($_COOKIE['online_review']);
           // Cookie::queue(Cookie::forget('online_review'));
        }

        // auth()->login($user);
        if(Cookie::get('online_review')){
            return redirect()->route('confirmation_register');
        }
        // delete after register completed
        Session::put('signup_process', 'true');
        Session::put('signup_step2', 'true');
        Session::put('register_user_email_in_process', request()->input('email'));

        // send register code
        $code = rand(1000, 9999);
        $phone = str_replace("+", "", request()->input('phone'));
        //Cookie::queue('online_review', "1", 1);
        setcookie('online_review', '1', time() + (60), "/");
        Session::put('phone_num', $phone);





        if ($this->isDigits($phone)) {

            $sendpulse_user_id = 'fa37b9752deda95e986a2fbd05b9e400';
            $sendpulse_user_secret = '5f3c631d707cd0c1a3eee3ab6a34b7f4';

            $variables = array(
                "email" => '',
                "phone" => $phone,
                "code" => $code,
            );


            $end_date = Cookie::get('left_time_for_confirmation_register_time');

            if (empty($end_date)) {
                $SPApiClient = new ApiClient($sendpulse_user_id, $sendpulse_user_secret, new FileStorage());
                $answer = $SPApiClient->startEventAutomation360('vostonovit_parol', $variables);

                $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 5 minute');
                Cookie::queue('left_time_for_confirmation_register_time', date('Y-m-d H:i:s', $newtimestamp), 5);

                Session::put('register_confirmation_code', $code);
            }




        }




        return redirect()->to('/confirmation-register');

    }


    public function check_signup_confirmation_code(Request $request)
    {
        $numbers = request()->input('number');
        foreach (request()->input('number') as $key => $value) {
            if (is_null($value)) {
                unset($numbers[$key]);
            }
        }


        if (count($numbers) < 4) {
            return back()->withErrors([
                'confirmation_code_error' => 'Введите коректный код '
            ]);
        }

        $real_code = Session::get('register_confirmation_code');
        $user_write_code = implode("", $numbers);

        if ($user_write_code == $real_code) {


            Session::put('show_register_successfully', 'show');

            session()->forget('signup_process');
            session()->forget('signup_step2');
            session()->forget('register_confirmation_code');

            $user = User::create(session()->get('after_registration'));



            $token = uniqid();
            $email = $user->email;

            $user_update  = User::where('email', '=', $email)->update(['verified_token' => $token]);


            Mail::send('email-verify-template-after-register', ['token' => $token,'email'=>$email], function($message) use( $user ){
                $message->sender(Env::get('MAIL_FROM_ADDRESS'));
                $message->to( $user->email);
                $message->subject('VERIFY EMAIL');
            });

            $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 1 minute');
            Cookie::queue('left_time_for_verify_email', date('Y-m-d H:i:s', $newtimestamp), 1);

            Session::forget('after_registration');
            Session::put('user_ture_registration', $user);
            return redirect()->route('register_successfully');

        } else {

            return back()->withErrors([
                'confirmation_code_error' => 'Введите коректный код '
            ]);

        }


    }


    public function change_role_to_investor()
    {
        if (session()->has('register_user_email_in_process')) {
            $user_email = Session::get('register_user_email_in_process');
            $user_type = request()->input('user_type');
            $user = User::where('email', '=', $user_email)->first();
            $user->role_id = '1';
            $user->save();
            Auth::login($user);
            Session::forget('register_user_email_in_process');
            if (Auth::check()) {
                return redirect()->to('/profile');
            } else {
                return redirect()->route('signup');
            }
        }
    }

    public function change_role_to_busines()
    {
        if (session()->has('register_user_email_in_process')) {
            $user_email = Session::get('register_user_email_in_process');
            $user_type = request()->input('user_type');
            $user = User::where('email', '=', $user_email)->first();
            $user->role_id = '2';
            $user->save();
            Auth::login($user);
            Session::forget('register_user_email_in_process');
            if (Auth::check()) {
                return redirect()->to('/profile');
            } else {
                return redirect()->route('signup');
            }
        }

    }

    public function login_as_guest_after_reg()
    {
        if (session()->has('register_user_email_in_process')) {
            $user_email = Session::get('register_user_email_in_process');
            $user = User::where('email', '=', $user_email)->first();
            Auth::login($user);
            Session::forget('register_user_email_in_process');
            if (Auth::check()) {
                return redirect()->to('/');
            } else {
                return redirect()->route('signup');
            }
        }
    }



        public  function verify_email_after_register($token, $email)
        {
            if (!empty($token) && !empty($email)){
                $user1  = User::where([
                    'email'=> $email,
                    'verified_token' => $token
                ])->first();



                if (!empty($user1)){
                     User::where([
                        'email'=> $email,
                        'verified_token' => $token
                    ])->update(['is_verified_email' => 1]);
//                    $user1->is_verified_email=1;
//                    $user1->save();
                    return redirect()->route('email_verify_success');

                }else{
                    return redirect()->route('login');
                }

            };

        }

        public function email_verify_success()
        {
            return view('email_verify_success');
        }

}
