<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AuthController,HomeController,AdminController, StudentController,CourseController};

Route::match(["get","post"],"/auth/login",[AuthController::class,"login"])->name('login');
Route::match(["get","post"],"/auth/signup",[AuthController::class,"signup"])->name('signup');
Route::get("/logout",[AuthController::class,"logout"])->name("logout");

Route::get("/",[HomeController::class,"index"])->name("homepage");




Route::prefix("admin")->group(function(){
    Route::resource('course', CourseController::class);
    
    Route::controller(AdminController::class)->group(function(){
        Route::get("/index","dashboard")->name("admin.index");
        Route::get("/manage/user","manageUser")->name("admin.manage.user");
        Route::get("/manage/student","manageStudent")->name("admin.manage.student");
    }); 
});




Route::middleware(['auth'])->group(function () {
    Route::resource("student",StudentController::class);
});