<?php

namespace App\Models;

use CodeIgniter\Model;

class FigurineModel extends Model
{
    protected $table = 'figurine';

    /**
     * @param false|string $slug
     *
     * @return array|null
     */
    public function getFigurines($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}