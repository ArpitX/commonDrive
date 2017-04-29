<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\File;
use App\Links;

class FilesController extends Controller
{
    public function store($inst_id,$sub_id){
        if(auth()->check()){
            $file = new File;
            $file->name = request('name');
            $file->subject_id = $sub_id;
            $upload = request()->file('newfile')->store('/public/appuploads');
            $url = Storage::url($upload);
            //$ext = $upload->guessClientExtension();
            $file->location = $url;
            $file->user_id = auth()->id();
            $file->save();
            return view('upload.index', compact('url'));
            //return $url;
        }
        else {
            return view('auth.login');
        }
    }
    public function addLink($inst_id,$sub_id){
        if(auth()->check()){
            $link = new Links;
            $link->name = request('name');
            $link->url = request('newurl');
            $link->subject_id = $sub_id;
            $link->user_id = auth()->id();
            $link->save();
            return view('upload.newlink');
        }
        else{
            return view('auth.login');
        }
    }
}
