<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Items;
use App\Models\Detail_transactions;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function homepage(){
        return view('homepage_customer');
    }

    public function profile(){
        $id = Session::get('id');
        $data = Customers::find($id);
        Session::get('username', $data->username);
        return view('layout\customer\profile', ['customers' => $data]);
    }

    public function updateProfilePage(){
        $id = Session::get('id');
        $data = Customers::find($id);
        return view('layout\customer\updateProfile', ['customers' => $data]);
    }
    
    public function updateProfile(Request $request){
        $rules = [
            'fullname' => 'required|max:150',
            'username' => 'required|max:15',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|max:200'
        ];
        $message = [
            'fullname.required' => 'Fullname is required',
            'fullname.max' => 'fullname maximum 150 characters',
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

        $data = Customers::find($request->id);
        $data->fullname = $request->fullname;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        Session::put('name', $request->username);

        return redirect()->route('profile.index.customer')->with('success', 'Data updated successfully');
    }

    public function itemRentPage(){
        $type = request()->segment(count(request()->segments()));
            error_log($type);
        $data = Items::where('type', $type)->get();
        return view('layout/customer/listItem_customer', ['items' => $data]);

    }

    public function cartPage(){
        return view('layout/customer/cart');
    }

    public function cart(Request $request){
        $rules = [
            'rent' => 'required',
            'amount' => 'required'
        ];
        $message = [
            'rent.required' => 'Rent is required',
            'amount.required' => 'Amount is required'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $id = $request->id;
        $item = Items::find($id);

        $cart = session()->get('cart');
        $totalPrice = ($request->rent * $item->price) * $request->amount;
        if(!$cart) {
            $cart = [
                $id => [
                    "quantity" => 1,
                    "id" => $item->id,
                    "type" => $item->type,
                    "name" => $item->item_name,
                    "specification" => $item->specification,
                    "availability" => $item->availability,
                    "price" => $totalPrice,
                    "amount" => $request->amount,
                    "rent" => $request->rent
                ]
            ];
            session()->put('cart', $cart);
            return view('layout/customer/cart');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return view('layout/customer/cart');
        }

        $cart[$id] = [
            "quantity" => 1,
            "id" => $item->id,
            "type" => $item->type,
            "name" => $item->item_name,
            "specification" => $item->specification,
            "availability" => $item->availability,
            "price" => $totalPrice,
            "amount" => $request->amount,
            "rent" => $request->rent
        ];
        session()->put('cart', $cart);
        return view('layout/customer/cart');
    }

    public function deleteCart(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->route('cart.index');
        }
    }

    public function transactionPage(){
        $data = Transactions::all();
        return view('layout\customer\transaction', ['transactions' => $data]);
    }

    public function transaction(Request $request){
        $transaction = Transactions::create([
            'total_price' => $request->grandTotal
        ]);
        $transaction->save();
        // $data = Transactions::where('total_price', $request->grandTotal)->get();
        // Session::put('totalPrice' $data->id);
        foreach (session('cart') as $id => $details){
            $detail = Detail_transactions::create([
                'customer_id' => Session::get('id'),
                'item_id' => $details['id'],
                'equipment_name' => $details['name'],
                'type' => $details['type'],
                'amount' => $details['amount'],
                'period' => $details['rent'],
                'price' => $details['price']
            ]);
            $detail->save();
        }
        return redirect()->route('transaction.index');
    }
}
