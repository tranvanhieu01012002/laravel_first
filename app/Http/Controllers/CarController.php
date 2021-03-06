<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{
    function fileAction($img){
           // just update things we need
           $imgLink = public_path('images\\').$img; 
            
           if(File::exists($imgLink)) {
               File::delete($imgLink);
           }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $cars = Car::all(); //1.b
        return view('showAll',compact('cars'));
    }

    public function index_producer($id){
        if($id==-1){
            $cars = Car::all(); //1.b
            $pros = \App\Models\Producer::all(); //1.bx`
            return view('showAll',compact('cars','pros'));
        }
        else{
            $pros = \App\Models\Producer::all();
            $pro = \App\Models\Producer::findOrFail($id); //1.b
            // dd($pro);
            $cars = $pro->cars()->get();
            return view('showAll',compact('cars','pros'));
        }
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pros = \App\Models\Producer::all();
        return view('Admin/addForm',compact('pros'));
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
        $car->producer_id = $request->producer;
        // $car->producer()->associate(100);
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
        $pros = \App\Models\Producer::all();
        $car = Car::find($id); //1.b
        return view('Admin/addForm',compact('car','pros'));
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

        // check avariable request
        // return view('cars.index');
        $validate = $request->validate([
            'model' => 'required',
            'description' => 'required',
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

        // create $car with id from database
        $car =Car::find($id);
        $car->description = $request->description;
        $car->model = $request->model;
        $car->producer_id = $request->producer;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $currentPath = public_path('images');
            $file->move($currentPath,$name);

            $this->fileAction($car->image);

            $car->image = $name;

        }
        $car->save();
        return redirect()->route('cars.index')->with('success','Bạn đã cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        $this->fileAction($car->image);
        
        $car->delete();
        return  redirect()->route('cars.index')->with('success','Bạn đã xóa thành công');
    }
}
