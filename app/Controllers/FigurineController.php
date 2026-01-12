<?php

namespace App\Controllers;

use App\Models\FigurineModel;

class Figurine extends BaseController
{
    public function index()
    {
        $model = model(FigurineModel::class);

        $data['figurine_list'] = $model->getFigurines();

        return view('templates/header', $data)
            . view('figurines/index')
            . view('templates/footer');
    }

    public function show(?string $slug = null)
    {
        $model = model(FigurineModel::class);

        $data['figurine'] = $model->getFigurines($slug);
    }
}