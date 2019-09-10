<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lecturers;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    // create a user
     public function store(Request $request)
    {
        $lecturer = new Lecturers();
        $lecturer->fN = $request->fN;
        $lecturer->lN = $request->lN;
        $lecturer->tt = $request->tt;
        $lecturer->password = Hash::make($request->password);
        $lecturer->matricule = $request->matricule;



        $exist = Lecturers::where('matricule', $lecturer->matricule)->first();
        if(!$exist){
            $lecturer->save();
        }

        return redirect()->route('dashboard');
    }

    // Authenticate a user
    public function login(Request $request)
    {
       //dd($request->all());
        $lecturer = Lecturers::where('matricule', $request->matricule)->first();
        //dd(Hash::check('234fcf','$2y$10$CByMUwMdUg.aaqQCOsxFee1cNsY3k/OltN/ievIrso4j4UxBh9TWu'));
        if($lecturer != null && \Hash::check($request->password, $lecturer->password)){
            return redirect()->route('dashboard');

        }
        else{
            return redirect()->back();
        }
    }

    // get all lecturers on the system
    public function lecturers()
    {
        // Lecturers::all();
        //$lecturers = Lecturers::all();
        //dd($lecturers);
        $lecturers = Lecturers::all();

        return view("index", ["lecturers"=>$lecturers]);
    }


}
