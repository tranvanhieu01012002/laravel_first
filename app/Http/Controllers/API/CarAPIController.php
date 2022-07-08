<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

use Illuminate\Http\Response;

use App\Http\Resources\Car as CarResource;

class CarAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        return [
            'model.required' => 'Vui lòng nhập model',
            'description.required' => 'Vui lòng nhập description', 
            'image.required'=> 'Vui lòng nhập ảnh vào',
        ];
    }
    
    public function index()
    {
        //
        $cars = Car::join("producers","producers.id","=","cars.producer_id")->get(["cars.*","producers.name"]);
        // return response()->json($cars,Response::HTTP_OK);
        // return response()->json(["status" => "success", "count" => count($cars), "data" => $cars]);
        return CarResource::collection($cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        // $validate = $request->validate([
        //     'model' => 'required',
        //     'description' => 'required',
        //     'image'=>'required',
        // ],$this->messages());
     
        // if ($validate->errors()){
        //     $response=array('status'=>'error','errors'=> $validate->errors()); 
        //     return response()->json($response);
        // }

        $validation = Validator::make($request->all(),
        [
            'model' => 'required',
            'description' => 'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
            'producer_id'=>'required | integer'
        ]);

        if ($validation->fails()){
            $response=array('status'=>'error','errors'=>$validation->errors()->toArray()); 
            return response()->json($response);
        }

        if($request->hasfile('image')){
            // $this->validate($request, 
			// [
			// 	'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
			// ],			
			// [   
			// 	'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			// 	'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			// ]
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $currentPath = public_path('images');
            $file->move($currentPath,$name);
            dd($request);
            $car = new Car();
            $car->description = $request->description;
            $car->model = $request->model;
            $car->producer_id = $request->producer;
            // $car->producer()->associate(100);
            $car->image = $name;
            $car->save();
        }
        if($car) {            
                return response()->json(["status" => "200", "success" => true, "message" => "car record created successfully", "data" => $car]);
            }    
        else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! failed to create."]);
        }
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
        $car = Car::find($id);
        // return CarResource::collection($car);
        return new CarResource($car);
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
