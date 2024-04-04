<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($id) {
        $project = Project::find($id);
        return view("/show", array("project" => $project));
    }

    public function list() {
        return view("/list", array("projects" => Project::all()));
    }

    public function edit($id) {
        $project = Project::find($id);
        return view("edit", compact("project"));
    }

    public function update(Request $request, $id) {
        $project = Project::find($id);
        $user = DB::table("users")->where("name", "=", $request->username)->value("id");
        $project->title = $request->title;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->phase = $request->phase;
        $project->description = $request->description;
        $project->uid = $user;
        $project->save();
        return view("/list", array("projects" => Project::all()));
    }

    public function delete($id) {
        $project = Project::find($id);
        $project->delete();
        return view("/list", array("projects" => Project::all()));
    }

    public function searchByTitle(Request $request) {
        $projects = DB::table("projects")->where("title", "=", $request->title)->get();
        return view("/list", array("projects" => $projects));
    }

    public function searchByStartDate(Request $request) {
        $projects = DB::table("projects")->where("start_date", "=", $request->start_date)->get();
        return view("/list", array("projects" => $projects));
    }
}
