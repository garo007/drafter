<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DateTime;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Env;

class ProfileController extends Controller
{
    public function index()
    {

        if (request()->box){
            Session::flash('box',request()->box);
        }
        $categories = DB::table('categories')->get();
        $business_bookmark = [];
        $investment_bookmark = [];
        $companies = Auth::user()->companies;
        $check = Auth::user()->bookmarks()->get();
        foreach ($check as $user_bookmark){
            if($user_bookmark->add_type == 'business'){
                $business_bookmark[] = Business::where('id',$user_bookmark->add_id)->first();
            }elseif ($user_bookmark->add_type == 'investment'){
            $investment_bookmark[] = Investment::where('id',$user_bookmark->add_id)->first();
        }
        }
        $user_id = Auth::user()->id;
        $profil_first = User::where('id',$user_id)->with('profile')->first();
        $profile = $profil_first->profile;

        // dd('ds');
         // setcookie('left_time_for_verify_email', '1', time() + (60), "/");


        if(!empty($profile))
        {
            return view('profile',[ 'profil' => $profile ,'business_bookmark' => $business_bookmark ,'investment_bookmark' => $investment_bookmark, "companies" => $companies,"categories" => $categories]);
        }
        else
        {
            return view('profile',[ 'business_bookmark' => $business_bookmark ,'investment_bookmark' => $investment_bookmark , "companies" => $companies, "categories" => $categories]);
        }




    }
    public function updateRole(Request $request){
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['role_id' => $request->get('role_id')]);
        return redirect()->back()->with('success','Ваш роль изменен');
    }

    public function edit_profile()
    {
    	$user = Auth::user();
    	$oldProfil = Profil::where('user_id', $user->id)->first();
         if(!empty($oldProfil))
        {
            return view('edit_profile', [ 'profil' => $oldProfil ] );
        }
        else
        {
            return view('edit_profile');
        }
    }

    public function update( Request $request )
    {

        $rname = explode(' ', $request->input('name_surname'));
        $user = Auth::user();
        Session::flash('session_for_edit_profile',true);
        $messages = [
            'name_surname.required' => 'Обязательное поле',
            'phone.required'        => 'Обязательное поле',
            'email.required'        => 'Обязательное поле',
            'email.unique'          => 'Введите уникальный Email',
            'phone.unique'          => 'Введите уникальный номер телефона',
            'phone.min'          => 'В телефоне должно быть не менее 9 символов',
        ];
        session()->put('session_for_edit_profile','true');
        $this->validate(request(), [
            'name_surname'  => 'required',
            'phone'         => 'min:9|unique:users,phone,'. $user->id,
            'email'         => 'required|email|unique:users,email,' . $user->id,
        ], $messages);




    	User::where('id',$user->id)->update([
    			'fullname' 	=> $request->input('name_surname'),
    			'name' 		=> isset($rname[0]) && !empty($rname[0]) ? $rname[0] : 'Имя ',
    			'surname' 	=> isset($rname[1]) && !empty($rname[1]) ? $rname[1] : 'Фамилия',
    			'phone' 	=> $request->phone,
                'email'     => $request->email
    		]
    		);

    	$profil = new Profil;
    	$oldProfil = Profil::where('user_id', $user->id)->first();

    	if ($request->hasFile('profil_photo')) {
            $profil_photo = $request->file('profil_photo')->store('profile_images', 'public');
            $profil_photo && ($oldProfil && isset($oldProfil->profil_photo) && file_exists('storage/' . $oldProfil->profil_photo )) ? unlink( 'storage/' . $oldProfil->profil_photo) : null;
        }
        if ($request->hasFile('passport_photo')) {
            $passport_photo = $request->file('passport_photo')->store('profile_images', 'public');
            $passport_photo && ($oldProfil && isset($oldProfil->passport_photo) && file_exists('storage/' . $oldProfil->passport_photo )) ? unlink( 'storage/' . $oldProfil->passport_photo) : null;
        }
        if ($request->hasFile('snils_photo')) {
            $snils_photo = $request->file('snils_photo')->store('profile_images', 'public');
            $snils_photo && ($oldProfil && isset($oldProfil->snils_photo) && file_exists('storage/' . $oldProfil->snils_photo )) ? unlink( 'storage/' . $oldProfil->snils_photo) : null;
        }
        if ($request->hasFile('selfi_pasport')) {
            $selfi_pasport = $request->file('selfi_pasport')->store('profile_images', 'public');
            $selfi_pasport && ($oldProfil && isset($oldProfil->selfi_pasport) && file_exists('storage/' . $oldProfil->selfi_pasport )) ? unlink( 'storage/' . $oldProfil->selfi_pasport) : null;
        }

    	$profil->updateOrInsert( [ 'user_id'  => $user->id ],
    		[
    			'user_id' 			=> $user->id,
    			'profil_photo' 		=> $profil_photo ?? $oldProfil->profil_photo ?? null,
    			'passport_number' 	=> $request->input('passport_number'),
    			'passport_photo' 	=> $passport_photo ?? $oldProfil->passport_photo ?? null,
    			'snils' 			=> $request->input('snils'),
    			'snils_photo' 		=> $snils_photo ?? $oldProfil->snils_photo ?? null,
    			'selfi_pasport' 	=> $selfi_pasport ?? $oldProfil->selfi_pasport ?? null,

    		]
    	);


        return redirect()->back()->with('success','Данние Сохранились');
    }
    public function editPassword(){
        return view('/editpassword');
    }

    public function updatePassword(Request $request){
        $messages = [
            'current_password.required'     => 'Обязательно поле',
            'new_password.required'         => 'Обязательно поле',
            'new_password.confirmed'         => 'Подтверждение нового пароля не совпадает.',
        ];
        $request->validate([
            'current_password'     => 'required',
            'new_password'         => 'required|confirmed'
        ],$messages);


        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->new_password,$hashedPassword)){
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->new_password);
                $user->save();
                return back()->with('successMsg', 'пароль успешно изменён');
            }
            return back()->with('errorMsg', 'новый пароль не может совпадать со старым паролем');
        }else
            return back()->with('errorMsg', 'неправильный пароль');
    }





    // public function set_time_for_verify_email()
    // {
    //     setcookie('online_review', '1', time() + (60), "/");
    // }

    public function left_time_for_verify_email(Request $request)
    {

        $end_date = Cookie::get('left_time_for_verify_email');

        if (empty($end_date)) {
            return response()->json(['timer'=>'false']);
        } else {
            $start_date  = new DateTime(date('Y-m-d h:i:s'));
            $since_start = $start_date->diff(new DateTime($end_date));
            $s = $since_start->s < 10 ? '0'.$since_start->s  : $since_start->s;
            return response()->json([
                'timer'=>'true',
                'message' => 'Повторное сообщение будет доступно через '.$since_start->i.':'.$s]);
        }

    }

    public function send_email_again(Request $request)
    {
        $token = uniqid();
        $email = Auth::user()->email;

        $user_update = User::where('email', $email)->update(['verified_token'=> $token]);
        $user        = Auth::user();

        Mail::send('email-verify-template-after-register', ['token' => $token,'email'=>$email], function($message) use( $user ){
            $message->sender(Env::get('MAIL_FROM_ADDRESS'));
            $message->to( $user->email);
            $message->subject('VERIFY EMAIL');
        });

        $newtimestamp = strtotime(date('Y-m-d h:i:s').' + 1 minute');
        Cookie::queue('left_time_for_verify_email', date('Y-m-d H:i:s', $newtimestamp), 1);

    }


}
