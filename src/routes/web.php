<?php
use oltrematica\budget\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use oltrematica\budget\Controllers\TestController;

Route::get('budget', [TestController::class,'index']);
