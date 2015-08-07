<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form {

    protected $formOptions = [
        'method' => 'POST',
        'url' => '/login'
    ];

    public function buildForm() {
        $this
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('save', 'submit', ['label' => 'Login']);
    }
}