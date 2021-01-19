<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentAPIController extends Controller
{
    //

    public function fetch(){
        return Student::all();
    }

    public function create(Request $request){
        Student::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'education' => $request->education,
            'skills' => $request->skills,
            'school' => $request->school,
            'dp' => $request->dp,
            'user_id' => $request->user_id,
        ]);
    }

    public function delete($id){
        Student::find($id)->delete();

        return "data delated successfully";
    }
}
