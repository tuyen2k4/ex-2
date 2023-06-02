<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home(){
        $studend = Student::all();
        return view('welcome',[
            "studend"=>$studend
            ]
        );
    }
    public function add(){
        return view('addStudent');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "age"=>"required",
            "address"=>"required",
            "phone"=>"required|min:10|max:20",
        ],[
            "required"=>"Vui lòng điền đầy đủ thông tin",
            "min"=>"Phải nhập tối thiểu :min",
            "max"=>"Nhập giá trị không vượt quá :max"
        ]);
        $student = new Student();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->to('/');
    }


}
