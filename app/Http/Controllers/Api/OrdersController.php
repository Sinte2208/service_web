<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function index()
    {
        $data = Orders::all();
        //$data = Orders::with('costumers')->get();
        return response()-> json ($data, 200);

    }

    public function show(Orders $id){
        return response()->json($id, 200);
    }
}
