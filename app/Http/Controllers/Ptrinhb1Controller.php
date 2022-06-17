<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class Ptrinhb1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("first");
    }
    public function messages()
    {
        return[
            'a.required' => 'a là bắt buộc nhập',
            'b.required' => 'b bắt buộc nhập',
        ];
    }
    function ca(Request $request){
        $a = $request->query('a');
        $b = $request->query('b');
        $result="hihih";
        if ($a == 0 && $b == 0){
            $result = "Phương trình vô số nghiệm";
        }
        else if ($a != 0 && $b == 0){
           
            $result = "Phương trình có nghiệm x = 0";
        }
        else if ($a == 0 && $b != 0){
            $result = "Phương trình vô nghiệm";
        }
        else {
            $result = round(-1*$b/$a,2);
        }
        return view('firstGet',compact('result','a','b'));
    }
    function calculatePT(Request $request)
    {
        // validate function
        $validated = $request->validate([
            'a' => 'required',
            'b' => 'required',
        ],$this->messages());

        //  validate class

        // $validator = Validator::make($request->all(), [
        //     'a' => 'required',
        //     'b' => 'required',
        // ],$this->messages());

        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     return view('first')->withErrors($errors);
        // } 
    


        $a = $request->input('a');
        $b = $request->input('b');
        $result="hihih";
        if ($a == 0 && $b == 0){
            $result = "Phương trình vô số nghiệm";
        }
        else if ($a != 0 && $b == 0){
           
            $result = "Phương trình có nghiệm x = 0";
        }
        else if ($a == 0 && $b != 0){
            $result = "Phương trình vô nghiệm";
        }
        else {
            $result = round(-$b/$a,2);
        }
        return view('first',compact('result','a','b'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
