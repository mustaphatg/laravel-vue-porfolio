<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectApiController extends Controller
{
    //

    public function all_project(Request $request)
    {

        $projects = Project::orderBy('id', 'asc')->get();

        return response()->json($projects);

    }
}
