<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index(){
        $data = Items::all();
        $check = $data->isNotEmpty();
        if($check) {
            return view('layout\employee\item', ['items' => $data]);
        } else {
            return view('layout\employee\item', ['items' => null]);
        }
    }

    public function addItemPage(){
        return view('layout\employee\addItem');
    }

    public function addItem(Request $request){
        $rules = [
            'name' => 'required|max:150',
            'type' => 'required',
            'specification' => 'required|max:250',
            'availability' => 'required|numeric|max:100',
            'price' => 'required|numeric'
        ];
        $message = [
            'name.required' => 'Name is required',
            'name.max' => 'Name maximum 150 characters',
            'type.required' => 'Type is required',
            'specification.required' => 'Specification is required',
            'specification.max' => 'Specification maximum 250 characters',
            'availability.required' => 'Availability is required',
            'availability.numeric' => 'Availability must be a number',
            'availability.max' => 'Availability maximum 100 numbers',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $item = Items::create([
            'item_name' => $request->name,
            'type' => $request->type,
            'specification' => $request->specification,
            'availability' => $request->availability,
            'price' => $request->price
        ]);
        $save = $item->save();

        if($save) {
            return redirect()->route('item.employee')->with('success', 'Register successfully! Please login to access data');;
        } else {
            return redirect()->route('item.employee')->with('failed', 'Register failed! Please try again later');
        }
    }

    public function updateItemPage($id){
        $data = Items::find($id);
        return view('layout\employee\updateItem', ['items' => $data]);
    }

    public function updateItem(Request $request){
        $rules = [
            'name' => 'required|max:150',
            'type' => 'required',
            'specification' => 'required|max:250',
            'availability' => 'required|numeric|max:100',
            'price' => 'required|numeric'
        ];
        $message = [
            'name.required' => 'Name is required',
            'name.max' => 'Name maximum 150 characters',
            'type.required' => 'Type is required',
            'specification.required' => 'Specification is required',
            'specification.max' => 'Specification maximum 250 characters',
            'availability.required' => 'Availability is required',
            'availability.numeric' => 'Availability must be a number',
            'availability.max' => 'Availability maximum 100 numbers',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = Items::find($request->id);
        $data->item_name = $request->name;
        $data->type = $request->type;
        $data->specification = $request->specification;
        $data->availability = $request->availability;
        $data->price = $request->price;
        $data->save();

        return redirect()->route('item.employee')->with('success', 'Data updated successfully');
    }

    public function deleteItem($id){
        $data = Items::find($id);
        $data->delete();
        return redirect()->route('item.employee')->with('success', 'Data has been deleted');
    }
}
