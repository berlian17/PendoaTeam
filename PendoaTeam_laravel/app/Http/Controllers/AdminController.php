<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Customers;
use App\Models\Items;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function homepage(){
        return view('homepage_employee');
    }

    public function profile(){
        $id = Session::get('id');
        $data = Employees::find($id);
        return view('layout\employee\profile', ['employees' => $data]);
    }

    public function updateProfilePage() {
        $id = Session::get('id');
        $data = Employees::find($id);
        return view('layout\employee\updateProfile', ['employees' => $data]);
    }

    public function updateProfile(Request $request){
        $rules = [
            'username' => 'required|max:15',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|max:200'
        ];
        $message = [
            'username.required' => 'Username is required',
            'username.max' => 'Username maximum 15 characters',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone must be a number',
            'phone.min' => 'Phone minimum 11 numbers',
            'address.required' => 'Address is required',
            'address.max' => 'Address maximum 200 characters'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = Employees::find($request->id);
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();

        return redirect()->route('profile.index.employee')->with('success', 'Data updated successfully');
    }

    public function userData(){
        $data = Customers::all();
        $check = $data->isNotEmpty();
        if($check) {
            $data1 = Employees::all();
            return view('layout\employee\user', compact(['data', 'data1']));
        } else {
            return view('layout\employee\user', ['data' => null]);
        }
    }

    public function addUserPage(){
        return view('layout\employee\addUser');
    }

    public function addUser(Request $request){
        $rules = [
            'fullname' => 'required|max:150',
            'username' => 'required|max:15',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:8',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|max:200'
        ];
        $message = [
            'fullname.required' => 'Fullname is required',
            'fullname.max' => 'Fullname maximum 150 characters',
            'username.required' => 'Username is required',
            'username.max' => 'Username maximum 15 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum 8 characters',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone must be a number',
            'phone.min' => 'Phone minimum 11 numbers',
            'address.required' => 'Address is required',
            'address.max' => 'Address maximum 200 characters'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $customer = Customers::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        $save = $customer->save();

        if($save) {
            return redirect()->route('userData')->with('success', 'Register successfully! Please login to access data');;
        } else {
            return redirect()->route('userData')->with('failed', 'Register failed! Please try again later');
        }
    }

    public function deleteUser($id){
        $data = Customers::find($id);
        $data->delete();
        return redirect()->route('userData')->with('success', 'Data has been deleted');
    }

    public function addEmployeePage(){
        return view('layout\admin\addEmployee');
    }

    public function addEmployee(Request $request){
        $rules = [
            'fullname' => 'required|max:150',
            'username' => 'required|max:15',
            'nip' => 'required',
            'email' => 'required|email|unique:employees',
            'password' => 'required|min:8',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|max:200',
            'department' => 'required',
            'role' => 'required'
        ];
        $message = [
            'fullname.required' => 'Fullname is required',
            'fullname.max' => 'Fullname maximum 150 characters',
            'username.required' => 'Username is required',
            'username.max' => 'Username maximum 15 characters',
            'nip' => 'NIP is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum 8 characters',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone must be a number',
            'phone.min' => 'Phone minimum 11 numbers',
            'address.required' => 'Address is required',
            'address.max' => 'Address maximum 200 characters',
            'department' => 'Department is required',
            'role' => 'Role is required'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $employee = Employees::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'role' => $request->role
        ]);
        $save = $employee->save();

        if($save) {
            return redirect()->route('userData')->with('success', 'Register successfully! Please login to access data');;
        } else {
            return redirect()->route('userData')->with('failed', 'Register failed! Please try again later');
        }
    }

    public function deleteEmployee($id){
        $data = Employees::find($id);
        $data->delete();
        return redirect()->route('userData')->with('success', 'Data has been deleted');
    }

    public function transaction(){
        $data = Transactions::all();
        $check = $data->isNotEmpty();
        if($check) {
            return view('layout\employee\transaction', ['transactions' => $data]);
        } else {
            return view('layout\employee\transaction', ['transactions' => null]);
        }
    }

    public function deleteTransaction($id){
        $data = Transactions::find($id);
        $data->delete();
        return redirect()->route('transaction.employee')->with('success', 'Data has been deleted');
    }

    public function itemRentPage(){
        $type = request()->segment(count(request()->segments()));
            
        $data = Items::where('type', $type)->get();
        return view('layout/employee/listItem_employee', ['items' => $data]);
    }
}
