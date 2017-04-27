<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Subject;

class InstitutesController extends Controller
{
    public function index(){
        $institutes = Institute::all();
        return view('institutes.index', compact('institutes'));
    }
    public function landing(){
        $institutes = Institute::all();
        return view('welcome', compact('institutes'));
    }
    public function show($id){
        $institute = Institute::find($id);
        $subjects = Subject::where('inst_id', $id)->get();
        return view('institutes.institute', compact('institute','subjects'));
    }
    public function view(){
        $id = request('instlist');
        if($id == 'new-institute'){
            return view('new_college');
        }
        $institute = Institute::find($id);
        $subjects = Subject::where('inst_id', $id)->get();
        return view('institutes.institute', compact('institute','subjects'));
    }
    public function newCollege(){
        return view('new_college');
    }
}
