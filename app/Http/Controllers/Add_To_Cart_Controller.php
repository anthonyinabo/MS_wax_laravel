<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Add_To_Cart_Controller extends Controller
{


public function add_product($id)
{
     $total = 0;

      $products = Dress::find($id);

        if(!$products) {
            abort(404);
        }

         if($products['stock'] == 0) {
            abort(404);
            }
 
        $cart = session()->get('cart');
 

        if(!$cart) {
     

            $cart = [
                    $id => [
                        "id" => $products->id,
                        "name" => $products->name,
                        "quantity" => $products->quantity,
                        "description" => $products->description,
                        "price" => $products->price,
                        "photo" => $products->photo,
                        "size" => $products->size,
                        'stock' => $products->stock 
                    ]
            ];

            session()->put('cart', $cart);

                DB::table('dresses')
                ->where('id', $products->id)
                ->update(['stock' => $products['stock'] -=1 ]);
                                                               
                 return redirect()->back();
        }

             if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

               DB::table('dresses')
                ->where('id', $products->id)
                ->update(['stock' => $products['stock'] -=1]);

            return redirect()->back();
 
        }


        $cart[$id] = [
            "id" => $products->id,
            "name" => $products->name,
            "quantity" => $products->quantity,
            "description" => $products->description,
            "price" => $products->price,
            "size" => $products->size,
            "photo" => $products->photo
        ];
    

        session()->put('cart', $cart);

           DB::table('dresses')
            ->where('id', $products->id)
            ->update(['stock' => $products['stock'] -=1]);

        return redirect()->back();
        
    }
}