<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        dd($student);
        return response()->json($student, 200);
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

        $student = new Student();
        //dd($request->all());
        $student->fN = $request->fN;
        $student->lN = $request->lN;
        $student->matricule = $request->matricule;
        $student->level_id = $request->level_id;
        $student->isRegistered = $request->isRegistered;
        $student->phone = $request->phone;
        $student->prgId = $request->prgId;


        try{
            $student->save();
            $msg["status"] = 200;
            $msg["msg"] = "Successfully created student". $student->name;
            $msg["student"] = $student;
        }
        catch(\Exception $e){
            $msg["status"] = 400;
            $msg["msg"] = "Student not saved";
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
    public function checkMacAddress(Request $request)
    {
        $msg = array();

        $macAddress = $request->macAddress;

        $student = Student::where("macAddress", "=", $macAddress)->first();
        if(!$student){
            $msg["status"] = 200;
            $msg["student"] = $student;
            $msg["isRegistered"] = 'no';
        } else {
            $msg["status"] = 200;
            $msg["student"] = $student;
            $msg["isRegistered"] = 'yes';
        }
        return response()->json($msg, $msg["status"]);

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
