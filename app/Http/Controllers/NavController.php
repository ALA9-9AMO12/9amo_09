<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index() {
        return view('index');
    }
    public function voorImkers() {
        return view('voorImkers');
    }
    public function cursussen() {
        return view('cursussen');
    }
    public function nieuwsArchief() {
        return view('nieuwsArchief');
    }
    public function artikelen() {
        return view('artikelen');
    }
    public function imkersVereniging() {
        return view('imkersVereniging');
    }
    public function contact() {
        return view('contact');
    }
    public function login() {
        return view('login');
    }
    public function admin() {
        return view('admin');
    }
}
