<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function adding(Request $request)

    {
        $items=new Products();
        $items->name=$request->name;
        $items->quantity=$request->quantity;
        $items->price=$request->price;

        $items->save();
    }
    
}
