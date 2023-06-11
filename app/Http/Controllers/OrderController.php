<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\OrderItem;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Snap;

class OrderController extends Controller
{

	public function index()
	{
		return view('admin.order.index');
	}

	public function process()
	{
        return view('frontend.order.checkout');
    }

	public function create(Request $request)
	{
		// get product from form data
		
		$products = json_decode($request->input('orders'));

		dd($products);
	}
}
