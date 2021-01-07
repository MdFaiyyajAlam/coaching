<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class StudentController extends Controller
{

 
    public function __construct(){
        $this->middleware('auth');
    }
    public function profile(){
        $data['student'] = Student::where('user_id',Auth::id())->firstOrFail();
        return view('homepage.profile',$data);
    }
    public function apply(){
        return view('homepage.apply');
    }

    public function applyStore(Request $request){

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'education' => 'required',
            'skills' => 'required',
            'school' => 'required',
            'dp' => 'required|mimes:jpg,png',
     
            
        ]);

        $filename = time()."." .$request->dp->extension();

        $request->dp->move(public_path('upload'),$filename);

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
            'dp' => $filename,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }
}
