<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FrontendRepositoryInterface;
use App\Models\{SubCategory, Product, OrderItem};
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    private FrontendRepositoryInterface $frontendRepository;
    private ProductRepositoryInterface $productRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository, ProductRepositoryInterface $productRepository)
    {
      $this->frontendRepository = $frontendRepository;
      $this->productRepository = $productRepository;
    }
    public function home()
    {
      $topSellers = DB::table('products')
                        ->leftJoin('order_items', 'products.id', '=', 'order_items.product_id')
                        ->selectRaw('products.id, SUM(order_items.qty) as total')
                        ->groupBy('products.id')
                        ->orderBy('total', 'desc')
                        ->take(4)
                        ->get();
      $bestSellers = Product::all()->sortByDesc('total_order_items')->take(4);
      // $topProducts = [];
      // foreach($topSellers as $s)
      // {
      //   $product = Product::findOrFail($s->id);
      //   $product->qty = $s->total;
      //   $topProducts[] = $product;
      // }
      return view('welcome', compact('bestSellers'));
    }

    public function womenArea()
    {
      $category = $this->frontendRepository->womenArea();

      return view('pages.frontend.women.index', [
        'category' => $category
      ]);
    }

    public function menArea()
    {
      $category = $this->frontendRepository->menArea();

      return view('pages.frontend.men.index', [
        'category' => $category
      ]);
    }

    public function productByCategory($slug)
    {
      //get subcategory
      $subcategory = SubCategory::where('slug', $slug)->select('id')->first();

      $products = Product::where('sub_category_id', $subcategory->id)->get();

      return view('pages.frontend.subcategories.index', [
        'products' => $products
      ]);
    }

    public function productJson($id)
    {
        $product = Product::find($id);
        return response()->json([
          'status' => true,
          'data' => $product,
          'attributes' => $product->product_attributes
        ]);
    }

    public function details($slug) {
      return view('pages.frontend.details', [
        'product' => $this->productRepository->apparel($slug)
      ]);
    }
}
