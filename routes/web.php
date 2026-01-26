<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("/services", function () {
    return view("service");
})->name("service");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");

// Course Routes
Route::get("/course/list", function () {
    return view("course.list");
})->name("course_list");

Route::get("/course/create", function () {
    return view("course.create");
})->name("course_create");

Route::get("/course/edit", function () {
    return view("course.edit");
})->name("course_edit");


Route::post("/course/store", function (Request $request) {
    // return $request;
    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    $course->description = $request->description;
    $course->save();
    // return view("course.create");
    return redirect()->route('course_create');

})->name("course_store");


// Get, Post let name = "sudam", $name = "sudam"
// HTTP Methods
// Get - read
// Post - create , save, store
// Put | Patch
// Delete
