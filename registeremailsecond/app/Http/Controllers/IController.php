<?php

namespace App\Http\Controllers;

use App\Event\changepassword;
use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Mail;
use session;

class IController extends Controller
{
    public $mail;
    public $mail1;
    public function index()
    {
        return view("register");
    }
    // function for register new account
    public function sign_submit(Request $request)
    {
        $add = new register;
        if ($request->isMethod('post')) {
            $add->username = $request->get('username');
            $this->mail = $add->email = $request->get('email');
            $this->mail1 = $add->password = $request->get('password');
            $add->save();
            $data = 'Successfully Registered. Please Verify Your Email';
            Mail::send('mail', compact('data'), function ($message) {
                $message->from('krsbarora6@gmail.com', 'kumkum');
                $message->to($this->mail, $this->mail1);
                $message->subject("Registration successfull");
            });
            return 'check the verification mail';
        }
        return redirect("login");
    }
    // for displaying login page
    public function login()
    {
        return view("login");
    }

    // for submit login
    public function login_submit(Request $request)
    {
        $username = $request->get('email');
        $password = $request->get('password');
        $match = register::select('*')->where('email', $username)->where('password', $password)
            ->first();
        if ($match) {
            $request->Session()->put('user', $match->id);
            $request->Session()->put('email', $username);
            // echo session('user');
            return redirect("display");
        }
    }
    public function display_dashboard()
    {
        return view("display");
    }

    // display the forgot password page
    public function change_password()
    {
        return view("changepass");
    }

    // for reset password email
    public function reset_submit(Request $request)
    {
        $this->mail = $request->get('email');
        $data = 'check the email';
        Mail::send('mail1', compact('data'), function ($message) {
            $message->from('krsbarora6@gmail.com', 'kumkum');
            $message->to($this->mail, $this->mail1);
            $message->subject("Change Password");
        });
        return 'check the verification mail for reset password';
    }
    public function display_newpassword()
    {
        return view("newpassword");
    }

    public function update_password(Request $request)
    {
        $username = $request->get('email');
        $password = $request->get('newpassword');
        $pass = $request->get('Cpassword');
        event(new changepassword($username, $password, $pass));
    }
}
