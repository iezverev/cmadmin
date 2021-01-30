<?php

namespace App\Http\Controllers;

use App\AppUsers;
use Illuminate\Http\Request;

class AppusersController extends Controller
{
    public function getAll()
    {
        return response()
            ->json(AppUsers::select('*')->get('*'))
            ->setStatusCode(200, 'Success');
    }

    public function getOne($id)
    {
        return response()
            ->json(AppUsers::where(['id' => $id])->get())
            ->setStatusCode(200, 'Success');
    }

    public function register(Request $request) {
        //валидируем поля
        $validator = validator($request->all(), [
            'email' => 'email|unique:users',
            'name' => 'required|unique:users',
            'phonenumber' => 'required|min:10|max:10'
        ]);

        //если валидация не прошла возвращем json с ошибкой
        if($validator->fails()) {
            return response()
                ->json($validator->errors())
                ->setStatusCode(400, 'Bad Request');
        }
        //создаем нового пользователя
        $user = new AppUsers();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phonenumber = $request->phonenumber;
        if($user->save()) { //если сохранилось возвращаем json с успехом
            return response()
                ->json('Success Registred')
                ->setStatusCode(201, 'Registred');
        }

        return response() // по дефолту возвращаем json с ошибкой
        ->json($validator->errors())
            ->setStatusCode(400, 'Bad Request');
    }
}
