<?php

namespace App\Http\Controllers;

use App\Product;
use App\Topping;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        return response()
            ->json(Product::select('*')->get('*'))
            ->setStatusCode(200, 'Success');
    }

    public function getOne($id)
    {
        $productsData = Product::select('*')->where(['id_coffeehouse' => $id])->get();// берем все продукты и зб нужной нас кофейни
        $toppingData = Topping::select('*')->where(['id_coffeehouse' => $id])->get();// берем все топинги и зб нужной нас кофейни

        // в цикле каждому объекту добавляем поле топпингс из бд топингов
        foreach ($productsData as $pd){
            $sizeData = DB::table('sizes')->where(['id_product' => $pd->id])->get();
            $pd->size = $sizeData;
            $pd->topping = $toppingData;
            $i = 0;
            foreach ($pd->size as $size){

                $size->val = $i;
                $i++;
            }
            foreach ($pd->topping as $topping){
                $topping->selected = false;
            }
        }

        return response()
            ->json($productsData)
            ->setStatusCode(200, 'Success');
    }
    public function getToppings($id) {
        $toppingData = Topping::select('*')->where(['id_coffeehouse' => $id])->get();

        foreach ($toppingData as $topping){
            $topping->selected = false;
        }
        return response()
            ->json($toppingData)
            ->setStatusCode(200, 'Success');
    }
}
