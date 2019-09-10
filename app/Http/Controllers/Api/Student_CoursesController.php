<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student_Courses;

class Student_CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s_course = Student_Courses::all();
        dd($s_course);
        return response()->json($s_course, 200);
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
        $msg = array();

        $s_course = new Student_Courses();
        //dd($request->all());
        $s_course->student_id = $request->student_id;
        $s_course->course_id = $request->course_id;


        try{
            $s_course->save();
            $msg["status"] = 200;
            $msg["msg"] = "Successfully created student course". $s_course->course_id;
            $msg["student_course"] = $s_course;
        }
        catch(\Exception $e){
            $msg["status"] = 400;
            $msg["msg"] = "student course not saved";
            $msg["error"] = $e->getMessage();
        }

         return response()->json($msg, $msg["status"]);
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
