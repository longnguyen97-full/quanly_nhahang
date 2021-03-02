<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_Detail;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function complete(Request $request) {
            
            $order = Order::insert([
                'id_customer' => $request['idCustomer'],
                'status' => 1,
                'order_date' => Carbon::now(),
                'giftcode' => $request['Giftcode_detail'],
                'payment_method' => $request['Payment_detail']
            ]);

            $idOrder = Order::select('id_order')->value('id_order');

            $order_detail = Order_Detail::insert([
                'id_order' => $idOrder,
                'id_product' => $request['idCustomer'],
                'quantity' => $request['Quantity'],
                'amount' => $request['Price']
            ]);

            return view('pages/complete');
    }
}

