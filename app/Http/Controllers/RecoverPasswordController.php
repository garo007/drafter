<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Validator;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use DateTime;


class RecoverPasswordController extends Controller
{
    public function index()
    {
//        dd(session()->all());

        // if pin correct and isset reset login show this page

        if (session()->has('show_recover_new_password_page') && session()->has('reset_password_email') && session()->has('show_recover_new_password_page') || session()->has('password_confirmation_code_email')) {
            return view('recover_password');
        } else {
            return redirect()->route('login');

        }
    }

    // step 2
    public function confirmation_recover_password()
    {
        if (session()->has('show_recover_password_page') && session()->has('reset_password_email')) {
            return view('confirmation_recover_password');
        } else {
            return redirect()->route('login');

        }
    }

    public function recover_password_step1_()
    {

        return view('recover_password_step1');
    }


    // step 4

    public function recover_password_step1()
    {
        $messages = [
            'password.required' => 'Обязательное поле',
            'password_confirmation.required' => 'Обязательное поле',
            'password.min' => 'Пароль должен состоять минимум из 4 символов',
            'password_confirmation.same' => 'Пароли не совпадают',
            'password_confirmation.min' => 'Пароль должен состоять минимум из 4 символов',
        ];

        $this->validate(request(), [
            'password' => 'required| min:4|confirmed',
            'password_confirmation' => 'required| min:4|same:password',
        ], $messages);

        $login = Session::get('reset_password_email1');
        $user  = User::where('phone', '=', $login)->orWhere('email', '=', $login)->first();

        if ($user->count() > 0) {

            $password_check = Hash::check(request('password'),$user->password);
            if ($password_check)
            {
                return back()->withErrors(['password'=>'Вы уже использовали этот пароль']);
            }
//            $options      = ['cost' => 12,];
            $new_password = Hash::make(request()->input('password'));

            $user->password = $new_password;
            $user->save();

            session()->forget('password_confirmation_code');
            session()->forget('show_recover_password_page');
            session()->forget('reset_password_email1');

            return redirect()->route('login');

        } else {
            return back()->withErrors([
                'phone_not_exist' => 'Пользователь с такими учетными данными не зарегистрирован на платформе                                                                            '
            ]);
        }

    }

    public function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {

        return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
    }

    // Step 1

    public function get_password_confirmation_code(Request $request)
    {

        $messages = [
            'phone_or_email.required' => 'Обязательное поле',
        ];

        $this->validate(request(), [
            'phone_or_email' => 'required',
        ], $messages);

        $login = request()->input('phone_or_email');
        $user  = User::where('phone', '=', $login)->orWhere('email', '=', $login);


        if ($user->count() < 1) {
            return back()->withErrors([
                'phone_not_exist' => 'Пользователь с данным номером телефона не существует'
            ]);
        }

        $code = rand(1000,9999);

        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {

            $token = uniqid();

            $end_date = Cookie::get('left_time_password_resets_email');

            if (empty($end_date)) {
                DB::table('password_resets')->insert(
                    ['email' => request('phone_or_email'), 'token' => $token, 'created_at' => Carbon::now()]
                );

                // Mail::send('email-verify-template', ['token' => $token,'user'=>$user->first()->id], function($message) use($request){
                Mail::send('email_template_reset_password', ['token' => $token,'user'=>$user->first()->id], function($message) use($request){
                    $message->sender(Env::get('MAIL_FROM_ADDRESS'));
                    $message->to($request->phone_or_email);
                    $message->subject('Reset Password Notification');
                });

                $sended = true;
                Session::put('send_modal', true);

                Session::put('password_confirmation_code_email', $token);


                $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 1 minute');
                Cookie::queue('left_time_password_resets_email', date('Y-m-d H:i:s', $newtimestamp), 1);
            }





            return redirect('recover-password-step1');

        } else {

            $phone = str_replace("+", "", $login);

            if($this->isDigits($phone)){

                $sendpulse_user_id     = 'fa37b9752deda95e986a2fbd05b9e400';
                $sendpulse_user_secret = '5f3c631d707cd0c1a3eee3ab6a34b7f4';

                $variables = array(
                    "email" => '',
                    "phone" => $phone,
                    "code" => $code,
                );

                $end_date = Cookie::get('left_time_password_resets_phone');

                if (empty($end_date)) {

                    $SPApiClient  = new ApiClient($sendpulse_user_id, $sendpulse_user_secret, new FileStorage());
                    $answer       =  $SPApiClient->startEventAutomation360('vostonovit_parol',$variables);
                    $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 5 minute');
                    Cookie::queue('left_time_password_resets_phone', date('Y-m-d H:i:s', $newtimestamp), 5);
                    Session::put('password_confirmation_code', $code);

                }

            }

        }

        Session::put('password_confirmation_phone', $phone);
        Session::put('show_recover_password_page', 'show');
        Session::put('reset_password_email', $login);


        return redirect()->route('confirmation_recover_password');

    }


    public function resend_reset_password_phone_code(){

        $code  = rand(1000,9999);
        $phone = Session::get('password_confirmation_phone');

        $sendpulse_user_id     = 'fa37b9752deda95e986a2fbd05b9e400';
        $sendpulse_user_secret = '5f3c631d707cd0c1a3eee3ab6a34b7f4';

        $variables = array(
            "email" => '',
            "phone" => $phone,
            "code" => $code,
        );


        $end_date = Cookie::get('left_time_password_resets_phone');

        if (empty($end_date)) {
            $SPApiClient = new ApiClient($sendpulse_user_id, $sendpulse_user_secret, new FileStorage());
            $answer =  $SPApiClient->startEventAutomation360('vostonovit_parol',$variables);
            $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 5 minute');
            Cookie::queue('left_time_password_resets_phone', date('Y-m-d H:i:s', $newtimestamp), 5);
        }

    }


    public function left_time_password_resets_phone()
    {
        $end_date = Cookie::get('left_time_password_resets_phone');

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


 public function left_time_password_resets_email()
    {
        $end_date = Cookie::get('left_time_password_resets_email');

        if (empty($end_date)) {

            return response()->json(['timer'=>'false']);

        } else {

            $start_date  = new DateTime(date('Y-m-d h:i:s'));
            $since_start = $start_date->diff(new DateTime($end_date));

            $s = $since_start->s < 10 ? '0'.$since_start->s  : $since_start->s;

            return response()->json([
                'timer'=>'true',
                'message' => 'Повторная отправка письма будет доступна через '.$since_start->i.':'.$s
            ]);

        }
    }



    // step 3
    public function check_password_confirmation_code()
    {

        if (!session()->has('show_recover_password_page') && session()->has('reset_password_email')) {
            return redirect()->route('login');
        }

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

        $real_code       = Session::get('password_confirmation_code');
        $user_write_code = implode("", $numbers);


        if ($user_write_code ==  $real_code ) {

            Session::put('show_recover_new_password_page', 'show');

            return redirect()->route('recover_password');

        } else {

            return back()->withErrors([
                'confirmation_code_error' => 'Введите коректный код '
            ]);

        }

    }
    public function verify_password_email(){
      
        $user              = User::find(request('user'));
        $revovery_password =  DB::table('password_resets')->where('email','=',$user->email)->latest()->exists();

        Session::put('reset_password_email1', $user->email);

        if($revovery_password){
            DB::table('password_resets')->where('email','=',$user->email)->latest()->delete();
           return redirect()->route('recover_password');
        } else {


            $email = Session::get('reset_password_email1');

            if (!empty($email)) {

                // $newtimestamp = strtotime(date('Y-m-d h:i:s').' +1 minute');
                // Cookie::queue('left_time_password_resets_email2', date('Y-m-d H:i:s', $newtimestamp), 1);

                return redirect()->route('recover_password_link_invalid');
                
            } else {
                return redirect()->route('login2');
            }

            
        }

        // return redirect()->route('recover_password');
    }

    public function left_time_password_resets_email2()
    {
         $end_date = Cookie::get('left_time_password_resets_email2');

        if (empty($end_date)) {

            return response()->json(['timer'=>'false']);

        } else {

            $start_date  = new DateTime(date('Y-m-d h:i:s'));
            $since_start = $start_date->diff(new DateTime($end_date));

            $s = $since_start->s < 10 ? '0'.$since_start->s  : $since_start->s;

            return response()->json([
                'timer'=>'true',
                'message' => 'Повторное отправка почты будет доступно через '.$since_start->i.':'.$s
            ]);

        }
    }


    public function resend_reset_password_email_code()
    {

        $token    = uniqid();
        $end_date = Cookie::get('left_time_password_resets_email2');
        $email    = Session::get('reset_password_email1');
        $user     =  User::select('*')->where('email', $email)->first();;

        if (empty($end_date)) {

            DB::table('password_resets')->insert(
                ['email' =>  $email, 'token' => $token, 'created_at' => Carbon::now()]
            );

            Mail::send('email_template_reset_password', ['token' => $token,'user'=>$user->first()->id], function($message) use($user){
                $message->sender(Env::get('MAIL_FROM_ADDRESS'));
                $message->to($user->email);
                $message->subject('Reset Password Notification');
            });

            // $sended = true;
            // Session::put('send_modal', true);
            Session::put('password_confirmation_code_email', $token);


            $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 1 minute');
            Cookie::queue('left_time_password_resets_email2', date('Y-m-d H:i:s', $newtimestamp), 1);
        }
    }


    public function recover_password_link_invalid()
    {
       return view('recover_password_link_invalid');
    }


    public function  change_number_for_recover_password()
    {
        session()->forget('show_recover_password_page');
        return redirect()->route('recover_password_step1_');
    }
}
