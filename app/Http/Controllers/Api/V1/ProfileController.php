<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Profil;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $full_user =  User::where('id',$id)->with('profile')->first();
        return $full_user;
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
        $rname = explode(' ', $request->name_surname);

        $messages = [
            'name_surname.required' => 'Обязательное поле',
            'phone.required'        => 'Номер Телефона Обязательное поле',
            'email.required'        => 'Поля Почта Обязательное поле',
            'email.unique'          => 'данная почта уже загегистрировалос другими ползовотеля',
        ];

        $this->validate(request(), [
            'name_surname'  => 'required',
            'phone'         => 'min:9',
            'email'         => 'required|email|unique:users,email,' . $id,
        ], $messages);
        User::find($id)->update([
                'name' 		=> $rname[0],
                'surname' 	=> $rname[1],
                'fullname' 	=> $request->name_surname,
                'phone' 	=> $request->phone,
                'email'     => $request->email
            ]
        );


        $profil = new Profil;
        $oldProfil = Profil::where('user_id', $id)->first();

        if ($request->has('profil_photo')) {
            $profil_photo = $request->profil_photo;
        }
        if ($request->has('passport_photo')) {
            $passport_photo = $request->passport_photo;
        }
        if ($request->has('snils_photo')) {
            $snils_photo = $request->snils_photo;
        }
        if ($request->has('selfi_pasport')) {
            $selfi_pasport = $request->selfi_pasport;
        }

        $profil->updateOrInsert( [ 'user_id'  => $id ],
            [
                'user_id' 			=> $id,
                'profil_photo' 		=> $profil_photo ?? $oldProfil->profil_photo ?? null,
                'passport_number' 	=> $request->passport_number,
                'passport_photo' 	=> $passport_photo ?? $oldProfil->passport_photo ?? null,
                'snils' 			=> $request->snils,
                'snils_photo' 		=> $snils_photo ?? $oldProfil->snils_photo ?? null,
                'selfi_pasport' 	=> $selfi_pasport ?? $oldProfil->selfi_pasport ?? null,

            ]
        );
        $full_user =  User::where('id',$id)->with('profile')->first();

        return response()->json([
            "user" => $full_user
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function myProjectsShow($user_id)
    {
        if(!$user_id)
        {
            return response()->json([
                "Error" => "User id is not found",
            ]);
        }
        else
        {
            $user = User::find($user_id);
            if ($user){
                $categories = Category::all();
                $invests = $user->investedTo()->select('invests.investment_id')->groupBy('invests.investment_id')->with('investment')->get();
                $businesses = $user->businesses;
                return response()->json([
                    "invests"    => $invests,
                    "categories" => $categories,
                    "businesses" => $businesses
                ]);
            }else{
                return response()->json([
                    "Error" => "User not found"
                ],404);
            }
        }
    }

}
