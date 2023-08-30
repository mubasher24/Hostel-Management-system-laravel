<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\StudentDetailsController;

Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('registration.form');
Route::post('/registration', [RegistrationController::class, 'register'])->name('registration.submit');
Route::get("/manage",[RegistrationController::class,'show2']);
Route::get("/trash/{id}",[RegistrationController::class,'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

// admin dashboaerd
    Route::get('/admin_dashboard', [HomeController::class, 'adminHome'])->name('admin.home');

// courses

    Route::match(['get', 'post'], '/add-course', [CourseController::class, 'createCourse'])->name('admin/add-course');
    Route::get('/manage-courses', [CourseController::class, 'manageCourses'])->name('admin/manage-courses');

    Route::get('/admin/manage-courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/edit-course/{id}', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('update-course/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('delete-course/{id}', [CourseController::class, 'destroy'])->name('courses.delete');

    // rooms
    Route::match(['get', 'post'], '/add-room', [RoomController::class, 'createRoom'])->name('admin/add-room');

    Route::get('/manage-rooms', [RoomController::class, 'manageRooms'])->name('admin.manage-rooms');
    Route::get('/edit-room/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('/update-room/{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::get('/delete-room/{id}', [RoomController::class, 'destroy'])->name('rooms.delete');


    // manage students

    Route::get('/student-details', [RegistrationController::class, 'show'])->name('admin/student.details');
    Route::get('/print-student/{id}', [RegistrationController::class, 'printStudent'])->name('print.student');

});













Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('registration.form');
Route::post('/registration', [RegistrationController::class, 'register'])->name('registration.submit');




Route::post('/get-seater', [RoomController::class, 'getSeater'])->name('get.seater');
Route::post('/get-fees', [RoomController::class, 'getFees'])->name('get.fees');
