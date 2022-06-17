<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberCalculate extends Controller
{
    //
    public function store(){
        return view('numberCalculate');
    }
    public function messages()
    {
        return [
            'number1.required' => 'Vui lòng nhập số đầu tiên',
            'number2.required' => 'Vui lòng nhập số thứ 2',
            'number2.numeric' => 'Số dầu tiên không phải là 1 số',
            'number1.numeric' => 'Số thứ 2 không phải là 1 số',
            'radio.required' => 'Vui lòng nhập phép tính',
        ];
    }
    public function caculateNumber(Request $request){

        $validate = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'radio' => 'required'
        ],$this->messages());

        $first = $request->input('number1');
        $second = $request->input('number2');
        $formula = $request->input('radio');
        
        if($formula == "*"){
            $result = $first * $second;
        }
        elseif($formula == "-"){
            $result = $first - $second;
        }
        elseif($formula == "+"){
            $result = $first + $second;
        }
        else{
            if($second == 0){
                $result = "Khong the chia cho 0";
                return view('numberCalculate',compact('formula','result','first','second'));
            }
            $result = $first / $second;
        }   
        $result = round($result,2);
        return view('numberCalculate',compact('formula','result','first','second'));
    }
}
