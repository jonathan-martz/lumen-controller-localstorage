<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use Illuminate\Http\JsonResponse;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * Class LocalStorageController
 * @package App\Http\Controllers
 */
class LocalStorageController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function select(Request $request)
    {
        $validation = $this->validate($request, [

        ]);

        $cookies = DB::table('localstorage')->get();

        $this->addResult('localstorage',$cookies);
        $this->addMessage('success', 'Local Storage loaded.');

        return $this->getResponse();
    }
}
