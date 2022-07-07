<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\CartRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class CartController extends Controller
{
    private CartRepositoryInterface $cartRepository;

    private ProductRepositoryInterface $productRepository;

    public function __construct(CartRepositoryInterface $cartRepository, ProductRepositoryInterface $productRepository) {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }

    public function addToCart($id) {
      $product = Product::findOrFail($id);

      $cart = session()->get('cart', []);

      if(isset($cart[$id])) {
        $cart[$id]["quantity"]++;
      } else {
        $cart[$id] = [
          "id" => $product->id,
          "name" => $product->name,
          "image" => $product->image,
          "price" => $product->amount,
          "quantity" => 1
        ];
      }

      session()->put('cart', $cart);

      notify()->success('Product successfully added to cart', 'Added');

      return redirect()->back();

      return response()->json([
        'success' => true,
        'cart' => $cart,
        'product' => $product
      ]);
    }

    public function removeFromCart($id) {
      $cart = session()->get('cart');
      if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
      }
      return response()->json([
        'success' => true,
        'message' => 'Item removed from cart'
      ]);
    }

    public function cartItemsJquery() {
      return session()->get('cart');
    }

    public function cart()
    {
      return view('pages.frontend.cart.index');
    }
}
