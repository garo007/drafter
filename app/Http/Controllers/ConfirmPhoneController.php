<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Illuminate\Support\Facades\Cookie;

class ConfirmPhoneController extends Controller
{
    public function confirmPhone()
    {
        $user_id = Auth::id();
        $email = Auth::user()->email;
        Session::put('signup_process', 'true');
        Session::put('signup_step2', 'true');
        Session::put('register_user_email_in_process', $email);

        // send register code
        $code = rand(1000, 9999);
        //$phone = str_replace("+", "", Auth::user()->phone);
        $phone = str_replace("+", "", session()->get('after_registration')['phone']);

        Session::put('phone_num', $phone);
        if ($this->isDigits($phone)) {

            $sendpulse_user_id = 'fa37b9752deda95e986a2fbd05b9e400';
            $sendpulse_user_secret = '5f3c631d707cd0c1a3eee3ab6a34b7f4';

            $variables = array(
                "email" => '',
                "phone" => $phone,
                "code" => $code,
            );

            $SPApiClient = new ApiClient($sendpulse_user_id, $sendpulse_user_secret, new FileStorage());
            $answer = $SPApiClient->startEventAutomation360('vostonovit_parol', $variables);

            Session::put('register_confirmation_code', $code);
            return redirect()->to('/confirmation-register')
                ->with([
                    'register_user_phone_in_process' => Auth::user()->phone
                ]);
        }
    }



    public function confirmPhoneRepeat(){
        $code = rand(1000, 9999);

        $phone = str_replace("+", "", session()->get('after_registration')['phone']);
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

            $SPApiClient = new ApiClient($sendpulse_user_id, $sendpulse_user_secret, new FileStorage());
            $answer = $SPApiClient->startEventAutomation360('vostonovit_parol', $variables);

            $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 5 minute');
            Cookie::queue('left_time_for_confirmation_register_time', date('Y-m-d H:i:s', $newtimestamp), 5);

            Session::forget('register_confirmation_code');
            Session::put('register_confirmation_code', $code);
        }

        
        return $code;
    }



    public function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool
    {
        return preg_match('/^[0-9]{' . $minDigits . ',' . $maxDigits . '}\z/', $s);
    }
}
