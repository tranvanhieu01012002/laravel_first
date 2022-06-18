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
            'image.required'=> 'Vui lòng nhập ảnh vào',
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
        // check avariable request
        // return view('cars.index');
        $validate = $request->validate([
            'model' => 'required',
            'description' => 'required',
            'image'=>'required',
        ],$this->messages());
        if($request->hasfile('image')){
            $this->validate($request, 
			[
				'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[   
				'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
		);
        }

        $file = $request->file('image');
        $name = time().'_'.$file->getClientOriginalName();
        $currentPath = public_path('images');
        $file->move($currentPath,$name);
   
        $car = new Car();
        $car->description = $request->description;
        $car->model = $request->model;
        $car->image = $name;
        $car->save();

        return  redirect()->route('cars.index')->with('success','Bạn đã thêm thành công');
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
        dd($id);
        return view('showAll');
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
