<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\InvokeFormRequest;

class InvokeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    /* public function __invoke(InvokeFormRequest $form_request)
    {
        logger('Mensaje de logger: ', $form_request->validated());
        return redirect()->back();
    } */
}
