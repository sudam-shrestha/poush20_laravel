<?php

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
