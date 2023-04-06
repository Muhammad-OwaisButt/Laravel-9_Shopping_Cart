<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    function addToCart(Request $req)
    {
        \Cart::add([
            'id' => $req->id,
            'name' => $req->name,
            'category' => $req->category,
            'price' => $req->price,
            'quantity' => $req->quantity,
            'attributes' => array(

                'imgpath' => $req->imgpath,
                'color' => $req->color,
                'size' => $req->size,
            )
        ]);

        session()->flash('success', 'PRODUCT IS ADDED TO CART SUCCESSFULLY !');

        // confirm
        return redirect()->route('cart.list');
    }

    function UpdateCart(Request $req)
    {
        \Cart::update(
            $req->id,
            [
                'quantity' => [
                    'relative' =>false,
                    'value' => $req->quantity,
                ],
            ]
        );

        session()->flash('warning', 'CART ITEM IS UPDATED SUCCESSFULLY !');

        return redirect()->route('cart.list');
    }

    function removeCart(Request $req)
    {
        \Cart::remove($req->id);

        session()->flash('destroy', 'CART ITEM REMOVE SUCCESSFULLY !');

        return redirect()->route('cart.list');
    }

    function clearAllCart()
    {
        \Cart::clear();

        session()->flash('destroy', 'ALL CART ITEMS CLEARED !');

        return redirect()->route('cart.list');
    }
}
