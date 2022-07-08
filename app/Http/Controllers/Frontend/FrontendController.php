<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FrontendRepositoryInterface;
use App\Models\{SubCategory, Product};
use App\Interfaces\ProductRepositoryInterface;

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
      return view('welcome');
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
