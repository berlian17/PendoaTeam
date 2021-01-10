<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Employees;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signInPage(){
        if(Auth::check()) {
            return redirect()->route('profile.index');
        }
        return view('Sign_in');
    }

    public function signIn(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $message = [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'password.required' => 'Password is required'
        ];
        
        $validator = Validator::make($request->all(), $rules, $message);
                
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        
        $datachek = Customers::where('email', $request->email)->first();
        if($datachek) {
            if($datachek->role == "customer"){
                $data = Customers::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('signIn', TRUE);

                        if($data->username == ''){
                            return redirect()->route('profile.index.customer');
                        }
                        return view('homepage_customer');
                    } else {
                        return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
            }
        }

        $datachek2 = Employees::where('email', $request->email)->first();
        if($datachek2) {
            if($datachek2->role == "employee"){
                $data = Employees::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('signIn', TRUE);
                        return view('homepage_employee');
                    } else {
                        return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
            }
        }

        $datachek2 = Employees::where('email', $request->email)->first();
        if($datachek2) {
            if($datachek2->role == "admin"){
                $data = Employees::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('signIn', TRUE);
                        return view('homepage_employee');
                    } else {
                        return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('signIn.index')->with('error', 'Invalid Email or Password');
            }
        }
    }

    public function signUpPage(){
        return view('sign_up');
    }

    protected function signUp(Request $request){
        $rules = [
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:8',
            'confirmation' => 'required'
        ];
        $message = [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum 8 characters',
            'confirmation.required' => 'Password confirmation is required'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if($request->password == $request->confirmation){
            $customer = Customers::create([
                'email' => $request->email,
                'password' =>$request->password
            ]);
            $save = $customer->save();

            if($save) {
                Session::flash('success', 'Register successfully! Please login to access data');
                return redirect()->route('signIn.index');
            } else {
                Session::flash('failed', 'Register failed! Please try again later');
                return redirect()->route('signUp.index');
            }
        } else {
            Session::flash('failed', 'Register failed! Please try again later');
            return redirect()->route('signUp.index');
        }
    }

    public function signOut(Request $request){
        $request->session()->flush();
        return redirect()->route('signIn.index');
    }
}
