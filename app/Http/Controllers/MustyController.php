<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Project;
use Illuminate\Support\Facades\Storage;

class MustyController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('index');
    }


    /**
     * Projects
     */
    public function projects(Request $request)
    {
        $data['projects'] = Project::all();
        return view('all_projects', $data);
    }

    public function add_project()
    {
        return view('add_project');
    }

    // store
    public function store_project (Request $request)
    {
        
        $path = 'https://via.placeholder.com/150';

        if($request->file('image')->isValid()){
            $path = $request->file('image')->store('public/project-images');
            $path = str_replace('public/', '', $path);
        }
        

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $path
        ]);

        return redirect()->route('all_projects');
    }


    // delete project
    public function delete_project(Request $request, $id)
    {
        
        $image = Project::findOrFail($id)->value('image');

        Storage::delete("public/{$image}");

        Project::destroy($id);

        return redirect()->back();
    }


    // edit project
    public function edit_project(Request $request, $id)
    {

        $data['project'] = Project::findOrFail($id);
        return view('edit_project', $data);
    }

    

    // update project
    public function update_project(Request $request)
    {
        Project::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link
        ]);

        return redirect()->route('all_projects');
    }




    // end of projects


}
