<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        echo $this->session->get('user_session_id');

        return view('welcome_message');
    }

    public function view(string $page = 'home')
    {
        //Si la page n'a pas été trouvée dans le dossier
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Ajoute une majuscule à la 1re lettre

        return view('templates/header', $data)
        .view('pages/' . $page)
        .view('templates/footer');
    }
}