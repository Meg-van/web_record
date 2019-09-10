<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lecturer_Courses;

class Lecturer_CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l_course = Lecturer_Courses::all();
        dd($l_course);
        return response()->json($l_course, 200);
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

        $l_course = new Lecturer_Courses();
        //dd($request->all());
        $l_course->lecturer_id = $request->lecturer_id;
        $l_course->course_id = $request->course_id;


        try{
            $l_course->save();
            $msg["status"] = 200;
            $msg["msg"] = "Successfully created lecture course". $l_course->course_id;
            $msg["l_course"] = $l_course;
        }
        catch(\Exception $e){
            $msg["status"] = 400;
            $msg["msg"] = "lecture course not saved";
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
