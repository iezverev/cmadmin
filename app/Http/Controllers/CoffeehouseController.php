<?php

namespace App\Http\Controllers;

use App\Coffeehouse;
use Illuminate\Http\Request;

class CoffeehouseController extends Controller
{
    public function getAll()
    {
        return response()
            ->json(Coffeehouse::select('*')->get('*'))
            ->setStatusCode(200, 'Success');
    }

    public function getOne($id)
    {
        return response()
            ->json(Coffeehouse::where(['id' => $id])->first())
            ->setStatusCode(200, 'Success');
    }
}
