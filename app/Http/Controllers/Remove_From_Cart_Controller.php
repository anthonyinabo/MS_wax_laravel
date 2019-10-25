<?php

    namespace App\Http\Controllers;

    use App\Dress;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class Remove_From_Cart_Controller extends Controller
    {
            public function remove($id)
        {
        $product = Dress::find($id);
      
      			if(!$product) {
                abort(404);
            }
                $products = session('cart');

            foreach ($products as $key => $value)
            {
                if ($value['id'] == $id) 
                {                
                    unset($products [$key]);            
                }
            }
                session()->put('cart',$products);

                    if($product['stock'] == 0) {

                       DB::table('dresses')
                        ->where('id', $product->id)
                        ->update(['stock' => 7 + $product['stock']]);
                       }

                       else {
                    
            DB::table('dresses')
            ->where('id', $product->id)
            ->update(['stock' => 7 / $product['stock'] * $product['stock'] ]);

    			}
    			
            return redirect()->back()->with('success');
        }

    }
