<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\CartRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Http\Requests\AddToCartRequest;
use App\Models\Product;
use Jackiedo\Cart\Cart;

class CartController extends Controller
{
    private CartRepositoryInterface $cartRepository;

    private ProductRepositoryInterface $productRepository;

    protected $cart;

    public function __construct(
      CartRepositoryInterface $cartRepository,
      ProductRepositoryInterface $productRepository,
      Cart $cart
    ) {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
        $this->cart = $cart;
    }

    public function addToCart(AddToCartRequest $request, Product $product) {

      $basket = $this->cart->name('basket');

      $recentlyViewed = $this->cart->newInstance('recently_viewed_items')->useForCommercial(false);

      $productItem = $basket->addItem([
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
          'size' => $request->validated()['size'],
          'color' => $request->validated()['color'],
        ]
      ]);

      $recent = $recentlyViewed->addItem([
        'id' => $product->id,
        'title' => $product->name,
      ]);

      notify()->success('Product successfully added to cart', 'Added');

      return redirect()->back();
    }

    public function removeFromCart($hash) {
      $cart = $this->cart->name('basket');

      $cart->removeItem($hash);

      notify()->success('Product successfully removed from cart', 'Item removed');

      return redirect()->back();
      // $cart = session()->get('cart');
      // if(isset($cart[$id])) {
      //   unset($cart[$id]);
      //   session()->put('cart', $cart);
      // }
      // return response()->json([
      //   'success' => true,
      //   'message' => 'Item removed from cart'
      // ]);
    }

    public function cartItemsJquery() {
      return session()->get('cart');
    }

    public function cart()
    {
      $cart = $this->cart->name('basket');
      return view('pages.frontend.cart.index', [
        'items' => $cart->getDetails()->get('items')
      ]);
    }

    public function updateQuantity(Request $request, $hash) {
      $cart = $this->cart->name('basket');

      $product = $cart->updateItem($hash, [
        'quantity' => $request->quantity
      ]);

      notify()->success('Update on quantity was successful', 'Added');

      return redirect()->back();
    }
}
