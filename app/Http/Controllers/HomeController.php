<?php namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilder;

class HomeController extends Controller {

    public function index(FormBuilder $formBuilder) {
        $registerForm = $formBuilder->create('App\Forms\RegisterForm');
        $loginForm = $formBuilder->create('App\Forms\LoginForm');
        return view('home', compact('registerForm', 'loginForm'));
    }
}