<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\SendResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use SendResponse;

    protected $params;
    public $request;

    public function __construct(Request $request)
    {
        $this->params = $request->all();
        $this->request = $request;
    }
}
