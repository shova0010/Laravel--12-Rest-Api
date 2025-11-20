<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function adding( Request $request ) {
        $items = new Products();
        $items->name = $request->name;
        $items->slug = $request->slug;
        $items->quantity = $request->quantity;
        $items->price = $request->price;

        $items->save();

        return response()->json( 'Added Successfully' );
    }

    public function edit( Request $request ) {
        $items = Products::findOrFail( $request->id );

        $items->name = $request->name;
        $items->slug = $request->name;
        $items->quantity = $request->quantity;
        $items->price = $request->price;

        $items->update();

        return response()->json( 'Updated Successfully' );

    }

    public function delete( Request $request ) {
        $item = Products::findorfail( $request->id )->delete();

        return response()->json('Delete Successfully');
    }

}
