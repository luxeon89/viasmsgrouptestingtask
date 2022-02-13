<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Hashing\BcryptHasher;

class RegisterUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function process()
    {
        return view('register_form');
    }

    public function success()
    {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $cpassword = htmlspecialchars($_POST['cpassword']);

        if (empty($name)) 
        { 
            return view('register_form', ['field' => 'Name']);
        }

        if (empty($email)) 
        { 
            return view('register_form', ['field' => 'Email']);
        }

        if (empty($password)) 
        { 
            return view('register_form', ['field' => 'Password']);
        }
        if ($password != $cpassword) 
        {
            return view('register_form', ['confirm' => 'The two passwords do not match']);
        }

        $results = DB::select('select * from users where email = :email', ['email' => $email]);

        if (count($results) > 0) 
        {
            return view('register_form', ['exists' => 'Email already exists']);
        }
        else
        {
            $hashedPassword = (new BcryptHasher)->make($password);
            DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $hashedPassword]);
            return view('success_form', ['name' => $name]);
        }
    }
}
