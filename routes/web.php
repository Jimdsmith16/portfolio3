<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AddFormController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchFormController;

Route::get('/', [ProjectController::class, "list"])->name("list_projects");
Route::get("show/{id}", [ProjectController::class, "show"]);
Route::get("delete/{id}", [ProjectController::class, "delete"]);
Route::get("add-form", [AddFormController::class, "index"]);
Route::post("store-form", [AddFormController::class, "store"]);
Route::get("show/{id}/edit", [ProjectController::class, "edit"])->name("edit_project");
Route::put("update/{id}", [ProjectController::class, "update"]);
Route::get("logout", [LogoutController::class, "logout"]);
Route::get("title-search-form", [SearchFormController::class, "titleIndex"]);
Route::get("start-date-search-form", [SearchFormController::class, "startDateIndex"]);
Route::post("title-search", [ProjectController::class, "searchByTitle"]);
Route::post("start-date-search", [ProjectController::class, "searchByStartDate"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
