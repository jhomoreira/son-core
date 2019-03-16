<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllerTrait;
use App\User;
use Laravel\Lumen\Routing\Controller;

class UsersController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $rules = [
        //'title' => 'required|min:3',
        //'content' => 'required',
    ];
    protected $messages = [
        //'required' => ':attribute é obrigatório',
        //'min' => ':attribute precisa de pelo menos :min caracteres',
    ];

    public function __construct(User $model)
    {
        $this->model = $model;
    }

}