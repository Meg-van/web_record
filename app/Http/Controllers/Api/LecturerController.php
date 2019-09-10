<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Lecturers;


class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lecturers = Lecturers::all();
        dd($lecturers);
        return response()->json($lecturers, 200);
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

        $lecturer = new Lecturers();
        //dd($request->all());
        $lecturer->fN = $request->fN;
        $lecturer->lN = $request->lN;
        $lecturer->password = Hash::make($request->password);
        $lecturer->tt = $request->tt;
        $lecturer->matricule = $request->matricule;


        try{
            $lecturer->save();
            $msg["status"] = 200;
            $msg["msg"] = "Successfully created lecturer". $lecturer->name;
            $msg["lecturer"] = $lecturer;
        }
        catch(\Exception $e){
            $msg["status"] = 400;
            $msg["msg"] = "Lecturer not saved";
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

    public function showLogin()
    {
    // show the form
    return View::make('login');
    }

    public function doLogin(Request $request)
    {
        $msg = array();

        $matricule = $request->matricule;
        $password = $request->password;

        $lecturer = Lecturers::where('matricule', '=', $matricule)->first();
        if($lecturer != null && Hash::check($password, $lecturer->password))
        {
            $msg["status"] = 200;

            $msg["firstname"] =  $lecturer->fN;
            $msg["lastname"] =  $lecturer->lN;
            $msg["title"] =  $lecturer->tt;
            $msg["matricule"] =  $lecturer->matricule;
            $msg["message"] = "Welcome" .$lecturer->fN;
        }
        else {
            $msg["status"] =  400;
            $msg["message"] = "Invalid credentials";
        }
        return response()->json($msg, $msg["status"]);
      }

}
