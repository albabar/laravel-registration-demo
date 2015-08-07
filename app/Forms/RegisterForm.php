<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form {

    protected $formOptions = [
        'method' => 'POST',
        'url' => '/register'
    ];

    public function buildForm() {
        $this
            ->add('name', 'text')
            ->add('email', 'email')
            ->add('password', 'repeated')
            ->add('save', 'submit', ['label' => 'Register']);
    }
}