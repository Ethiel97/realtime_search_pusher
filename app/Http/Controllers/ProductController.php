<?php

namespace App\Http\Controllers;

use App\Events\SearchEvent;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function search(Request $request)
    {
        $query = $request->query('query');
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();

        //broadcast search results with Pusher channels
        event(new SearchEvent($products));

        return response()->json("ok");
    }

    //fetch all products
    public function get(Request $request)
    {
        $products = Product::all();
        return response()->json($products);
    }
}
