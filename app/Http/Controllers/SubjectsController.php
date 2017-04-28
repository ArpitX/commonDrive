<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Subject;
use App\File;

class SubjectsController extends Controller
{
    public function store($id){
        if(auth()->check()){
            $subject = new Subject;
            $subject->name = request('subject');
            $subject->inst_id = $id;
            $subject->user_id = auth()->id();
            $subject->save();
            return redirect('/institutes/'.$id);
        }else {
            return view('auth.login');
        }

    }
    public function show($instId,$subjectId){
        $inst = \App\Institute::where('id', $instId)->get();
        $subject = Subject::where('id', $subjectId)->get();
        //$files = \App\File::where('subject_id', $subjectId)->get();
        $files = DB::table('users')->join('files', 'users.id', '=', 'files.user_id')->where('subject_id', $subjectId)->select('files.*','users.name as username')->get();

        return view('subjects.index', compact('subject','inst','files'));
    }
}
