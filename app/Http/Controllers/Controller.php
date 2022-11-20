<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $result = true;
    protected $data = null;
    protected $message;
    protected $validation;

    protected function createResponse() {

        $responseData = [
            'result' => $this->result,
            'data' => $this->data,
            'message' => $this->message ? $this->message : null,
            'validation' => $this->validation,
        ];

        return response()->json($responseData);
    }
}
