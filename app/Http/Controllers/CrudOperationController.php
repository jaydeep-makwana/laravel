<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Rules\email;

class CrudOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate(
            [
                "firstName" => "required | min:3 | max:10 | alpha",
                "lastName" => "required | min:3 | max:10 | alpha",
                "dob" => "required",
                "gender" => "required",
                "email" => ["required", new email, "unique:users,email" . $user->id],               # Custom Validation Rule using Rule Objects
                "mobile" => "required | numeric | regex:/^[0-9]{10}+$/ | unique:users,mobile" . $user->id,         # regex 
                "Password" => ["required", function ($attribute, $value, $fail) {
                    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/', $value)) {
                        $fail("the password must contain minimum 8 and maximum 16 character and one uppercase, one lowercase, one number and one spacial character.");
                    }
                }],                                             # Custom Validation Rule using Closures
                "confirm_password" => "required | same:Password",
                "hobby" => "required",
                "image" => "required | mimes:png,jpg,jpeg,PNG "
            ],

            [
                'mobile.unique' => 'The mobile number has already been taken.',
            ]
        );


        $hobby = implode(", ", $request->input('hobby'));
        $fileName = $request->file('image')->getClientOriginalName();

        $img_path = $request->file('image')->storeAs('photos', $fileName, 'uploads');

        # insert data using query builder
        DB::table("users")->insert([
            "first_name" => $request->input('firstName'),
            "last_name" => $request->input('lastName'),
            "DOB" => $request->input('dob'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "mobile" => $request->input('mobile'),
            "password" => Hash::make($request->input('Password')),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);

        return redirect("login")->with('success', 'Your account is created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($num = 5)
    {
        # fetch records using model
        $users = User::paginate($num);
        return view("Admin.admin_dashboard", ["records" => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =   DB::table('users')->where('id', $id)->get();

        return view('update', ['data' => $data]);
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
        $request->validate([
            "firstName" => "required | min:3 | max:10 | alpha",
            "lastName" => "required | min:3 | max:10 | alpha",
            "gender" => "required",
            "dob" => "required ",                     # regex 
            "email" => ["required", new email],               # Custom Validation Rule using Rule Objects
            "mobile" => "required | numeric | regex:/^[0-9]{10}+$/",                                            # Custom Validation Rule using Closures
            "hobby" => "required",
        ]);
        $img_path = "";
        $hobby = implode(", ", $request->input('hobby'));
        if (!file_exists($request->file('image'))) {
            $img_path = DB::table('users')->where('id', $id)->value('image');
        } else {
            $fileName = $request->file('image')->getClientOriginalName();
            $img_path = $request->file('image')->storeAs('photos', $fileName, 'uploads');
        }

        DB::table('users')->where('id', $id)->update([
            "first_name" => $request->input('firstName'),
            "last_name" => $request->input('lastName'),
            "gender" => $request->input('gender'),
            "DOB" => $request->input('dob'),
            "email" => $request->input('email'),
            "mobile" => $request->input('mobile'),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);


        return redirect("admin_dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect("admin_dashboard");
    }
}
