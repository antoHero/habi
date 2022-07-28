<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jackiedo\Cart\Cart;
use App\Models\Product;

class WishlistController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $wishlist = $this->cart->name('wishlist');

        $recentlyViewed = $this->cart->newInstance('wishlist')->useForCommercial(false);

        $items = $wishlist->getDetails()->items;
       
        return view('pages.frontend.wishlist.index', compact('items'));
    }

    public function addToWishlist($id)
    {
        $wishlist = $this->cart->name('wishlist');

        $product = Product::findOrFail($id);

        $productItem = $wishlist->addItem([
            'model' => $product,
            'id' => $product->id,
            'title' => $product->name,
            'quantity' => 1,
            'price' => $product->amount,
            'slug' => $product->slug,
            "extra_info" => [
              "date_time" => [
                  "added_at" => time(),
              ],
              'slug' => $product->slug,
              'image' => $product->image,
            ]
          ]);
        return redirect()->back();
    }
}
