<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class AddFormController extends Controller
{
    public function index() {
        return view("add-form");
    }

    public function store(Request $request) {
        $project = new Project;
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
}
