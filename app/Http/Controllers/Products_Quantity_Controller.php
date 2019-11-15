<?php

namespace App\Http\Controllers;


use App\Dress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products_Quantity_Controller extends Controller
{
       public function quantity($id)
    {  
      $products = Dress::find($id);

    $cart = session()->get('cart');


        if (isset($_POST['minus'])) {
           
                 $cart[$id]['quantity'] -= 1;

                     session()->put('cart', $cart);

                    if ($cart[$id]['quantity'] == 0 || $cart[$id]['quantity'] < 0) {
              
                        unset($cart[$id]);

                           session()->put('cart', $cart);
           }

              DB::table('dresses')
                ->where('id', $products->id)
                ->update(['stock' => $products['stock'] +=1]);

        return redirect()->back();

        }

        if (isset($_POST['plus'])) {
            
                 $cart[$id]['quantity']++;

                session()->put('cart', $cart);

            DB::table('dresses')
            ->where('id', $products->id)
             ->update(['stock' => $products['stock'] -=1]);

     switch ($cart[$id]['quantity']) {
            case $cart[$id]['quantity'] > 7 :
                abort(404);
                break;  
            }
        return redirect()->back();
        }
    }
}
