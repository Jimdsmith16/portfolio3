<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchFormController extends Controller
{
    public function titleIndex() {
        return view("title-search-form");
    }

    public function startDateIndex() {
        return view("start-date-search-form");
    }
}
