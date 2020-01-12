<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());

        $data = new Student;
        $data->first_name = $request->firstname;
        $data->last_name = $request->lastname;
        $data->save();
        return redirect('/show_student_details');
    }
    public function read()
    {
        $data = Student::all();
        // dd($data);
        return view('read', compact('data'));
    }
    public function delete_info($id)
    {
        // dd($id);
        $data = Student::find($id);
        // dd($data);
        $data->delete();
        return redirect('/show_student_details');
    }
    public function edit_info(Request $request, $id)
    {
        // dd($id);
        // $data = Student::find($id);
        $service = Student::where('id', $id)->first();

        // dd($service);
        return view('edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $service = Student::where('id', $id)->first();
        // dd($service);
        // $service = new Student;
        $service->first_name = $request->firstname;
        $service->last_name = $request->lastname;
        $service->save();
        return redirect('/show_student_details');
    }
}
