<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $teachers=Teacher::orderBy('id','desc')->get();
       return view('pages.teacher.teachers')->with('teachers',$teachers);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher_create()
    {
       return view('pages.teacher.teacher_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function teacher_store(Request $request)
    {
     
        $teacher=new Teacher();
        
        $teacher->teacher_id=$request->teacher_id;
        $teacher->index_id=$request->index_id;
        $teacher->name=$request->name;
        $teacher->designation=$request->designation;
        $teacher->email=$request->email;
        $teacher->degree=$request->degree;
        $teacher->address=$request->address;
        
        $teacher->password=$request->password;
        $teacher->mobile=$request->mobile;
        $teacher->save();
        return redirect()->route('teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $teacher=Teacher::find($id);

       $teacher->teacher_id=$request->teacher_id;
        $teacher->index_id=$request->index_id;
        $teacher->name=$request->name;
        $teacher->designation=$request->designation;
        $teacher->email=$request->email;
        $teacher->degree=$request->degree;
        $teacher->address=$request->address;
      
        $teacher->password=$request->password;
        $teacher->mobile=$request->mobile;
        $teacher->save();
        return redirect()->route('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
