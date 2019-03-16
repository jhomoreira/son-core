<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllerTrait;
use App\Noticia;
use Laravel\Lumen\Routing\Controller;

class NoticiasController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $rules = [
        'title' => 'required|min:3',
        'content' => 'required',
    ];
    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres',
    ];

    public function __construct(Noticia $model)
    {
        $this->model = $model;
    }

}