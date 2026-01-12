<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo $this->session->get('user_session_id');

        return view('welcome_message');
    }
}
