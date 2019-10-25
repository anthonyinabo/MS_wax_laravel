<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Select_Size_Controller extends Controller
{
	public function select($id)
	{

	$cart = session()->get('cart');

		if(isset($_POST['size_s'])) {

			if ($cart[$id]['size'] === "") {

				$cart[$id]['size'] = "S";
		}else {
				$cart[$id]['size'] = "S";
		}

	}

		if(isset($_POST['size_m'])) {

			if ($cart[$id]['size'] === "") {

				$cart[$id]['size'] = "M";
		}else {
				$cart[$id]['size'] = "M";
		}
	}


		if(isset($_POST['size_l'])) {

			if ($cart[$id]['size'] === "") {
		
			$cart[$id]['size'] = "L";
	}else {
			$cart[$id]['size'] = "L";
	}
}

		if(isset($_POST['size_xl'])) {
	
		if ($cart[$id]['size'] === "") {
		
			$cart[$id]['size'] = "XL";
	}else {
			$cart[$id]['size'] = "XL";
	}

  }
		session()->put('cart', $cart);
		
		return redirect()->back();
     }
}
