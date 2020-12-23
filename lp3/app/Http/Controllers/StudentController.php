<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Rules\FullName;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::all();
        return view("/students", compact("students"));
    }
    public function showTable()
    {
        $students= Student::all();
        return view("/table", compact("students"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
       $request->validate([
            'fullname'   =>['required', new FullName()],
            'nid'        =>'required', //|digits:10|numeric
            'address'    => 'required',
            'mobile'     => 'required', //|digits:14|numeric
            'email'      => 'required|email',
            'image'      => 'mimes:jpeg,jpg,png,gifmax:10000
',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {

        $this->create($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images', $filename);
        } else {
            $filename = "image.png";
        }

        Student::create([
            "fullname"    => $request->fullname,
            "email"       =>$request->email,
            "mobile"      =>$request->mobile,
            "address"     =>$request->address,
            "nid"         =>$request->nid,
            "image"       =>$filename,
        ]);








        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view("singleStudent", compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->create($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images', $filename);
        } 

        Student::findOrFail($id)->update( [
            "fullname"    =>$request->fullname,
            "email"       =>$request->email,
            "mobile"      =>$request->mobile,
            "address"     =>$request->address,
            "nid"         =>$request->nid,
            "image"       =>$filename,
        ]);
        return redirect("/table");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
//        Student::destroy($id);
        return redirect("/table");
    }
}
