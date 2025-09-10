<?php

use App\Http\Controllers\CadController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CadController::class, "index"])->name("index");
Route::get("/create", [CadController::class, "create"])->name("create");
Route::post("/store", [CadController::class, "store"])->name("store");
Route::get("/show/{id}", [CadController::class, "show"])->name("show");
Route::get("/edit/{id}", [CadController::class, "edit"])->name("edit");
Route::put("/update/{id}", [CadController::class, "update"])->name("update");
Route::delete("/destroy/{id}", [CadController::class, "destroy"])->name("destroy");