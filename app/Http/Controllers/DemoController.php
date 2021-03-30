<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
	public function index($name) {
		echo "<h1>Vietpro Laravel: $name</h1>";
	}

	public function home() {
		dd('qw');

		return view('home');
	}

	public function post() {
		return view('post');
	}
}