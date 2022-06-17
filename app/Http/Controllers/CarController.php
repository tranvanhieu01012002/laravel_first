<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all(); //1.b
        // dd($cars);
        return view('showAll',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin/addForm');
    }
    public function messages()
    {
        return [
            'model.required' => 'Vui lòng nhập model',
            'description.required' => 'Vui lòng nhập description',
            'number2.numeric' => 'Số dầu tiên không phải là 1 số',
            'number1.numeric' => 'Số thứ 2 không phải là 1 số',
            'radio.required' => 'Vui lòng nhập phép tính',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate= $request->validate([
            'model'=>'required',
            'description'=>'required',
            'image' => ['required', 'image']
        ],$this->messages());
        $image = $request->file('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
        $car = Car::find($id); //1.b
        // dd($car);
        return view('show',['car'=>$car]);
        //c2 compact('car')
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
        $car = Car::find($id); //1.b
        return view('Admin/addForm',compact('car'));
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
        //
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
}
