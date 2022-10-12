<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FrontendRepositoryInterface;
use App\Models\{Category, SubCategory, Product, OrderItem, Style};
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
      $products = Product::orderBy('created_at')->get();
      $bestSellers = Product::all()->sortByDesc('total_order_items')->take(4);
   
      return view('welcome', compact('bestSellers', 'products'));
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

    public function styleJson($id)
    {
      $style = Style::find($id);
      return response()->json([
        'status' => true,
        'data' => $style,
      ]);
    }

    public function details($slug) {
      // dd(explode("," ,$this->productRepository->apparel($slug)->size));
      // foreach($this->productRepository->apparel($slug)->size as $size) {
      //   dd($size);
      // }
      return view('pages.frontend.details', [
        'product' => $this->productRepository->apparel($slug)
      ]);
    }

    public function styleDetails($slug) {
      $style = Style::whereSlug($slug)->first();
      return view('pages.frontend.styles.details', compact('style'));
    }

    public function fabricsArea() {
      $fabrics = $this->productRepository->getAllFabrics();
      return view('pages.frontend.fabrics.index', compact('fabrics'));
    }

    public function accessoriesArea() {
      $accessories = $this->productRepository->getAllAccessories();
      return view('pages.frontend.accessories.index', compact('accessories'));
    }

    public function stylesArea() {
      $styles = $this->productRepository->getAllStyles();
      return view('pages.frontend.styles.index', compact('styles'));
    }

    public function shop()
    {
      $products = $this->frontendRepository->shop();
      return view('pages.frontend.shop.index', compact('products'));
    }

    public function about()
    {
      return view('pages.frontend.company.about');
    }

    public function styles(Category $category) {
        
      $styles = $category->styles;

      return response()->json($styles);
  }
}
