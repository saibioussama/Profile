<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cour;
use App\Subject;
use App\Section;
use App\File;
use Illuminate\Support\Facades\Storage;

class coursController extends Controller
{

    public function index()
    {
        return View('cours.index')->with([
            'subjects'=>Subject::all(),
            'cours'=>Cour::all(),
        ]);
    }


    public function create()
    {
        return View('cours.create')->with([
            'subjects'=>Subject::all(),
        ]);
    }


    public function store(Request $request)
    {
        $cour = Cour::create($request->all());
        $file = $request->file('file1');
        if(isset($file) && $file->getClientSize() > 0)
        {
            $path= $file->store('test');
            $upload_file=[
                'cour_id'=>$cour->id,
                'name'=>$file->getClientOriginalName(),
                'full_path'=>$path,
                'extension'=>$file->guessClientExtension(),
            ];
            File::create($upload_file);
        }

        return View('cours.index')->with([
            'subjects'=>Subject::all(),
            'cours'=>Cour::all(),
        ]);
     
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return View('cours.edit')->with([
            'cour'=>Cour::findOrFail($id),
            'subjects'=>Subject::all(),            
        ]);
    }


    public function update(Request $request, $id)
    {
        $cour=Cour::findOrFail($id);
        $cour->update($request->all());
        return View('cours.index')->with([
            'subjects'=>Subject::all(),
            'cours'=>Cour::all(),
        ]);
    }


    public function destroy($id)
    {
        Cour::destroy($id);
        return View('cours.index')->with([
            'subjects'=>Subject::all(),
            'cours'=>Cour::all(),
        ]);
    }

}
