<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMeasurementRequest;
use App\Interfaces\SpecialOrderRepositoryInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\{Product, Style, Category};

class SpecialOrderController extends Controller
{
    public function __construct(SpecialOrderRepositoryInterface $specialOrderRespository)
    {
        $this->middleware('auth');
        $this->specialOrderRespository = $specialOrderRespository;
    }

    public function specialOrder($slug)
    {
        $product = $this->getproduct($slug);
        $styles = Style::all();
        $categories = Category::all();
        return view('pages.frontend.cart.order', compact('product', 'styles', 'categories'));
    }

    public function submitMeasurement(StoreMeasurementRequest $request, $slug)
    {
        $product = $this->getproduct($slug);
        
        $upload = Cloudinary::upload($request->validated()['measurement']->getRealPath())->getSecurePath();

        $data = array(
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'style_id' => $request->validated()['style'],
            'measurement' => $upload
        );

        $this->specialOrderRespository->submitMeasurement($data);

        return redirect()->route('action.success');
        
    }

    public function getProduct($slug)
    {
       return Product::whereSlug($slug)->firstOrFail();
    }

    public function styles(Category $category) {
        
        $styles = $category->styles;

        return response()->json($styles);
    }

}
