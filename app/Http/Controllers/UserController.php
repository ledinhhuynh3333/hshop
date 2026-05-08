<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
                                      //   Tạo file UserController nhưng không có sẵn các method
                                            // php artisan migrate:rollback
                                            // php artisan migrate
                                            // Xoá file UserController 
                                            // Tạo lại file UserController  --> php artisan make:controller UserController -r

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return User::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {       
       //  User::findOrFail($id)->update($request);   dieu chinh lai Bài 9: Controller 17:40
        User::findOrFail($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //  User::findOrFail($id)->destroy();   dieu chinh lai Bài 9: Controller 18:05
        User::findOrFail($id)->delete();
    }
}
