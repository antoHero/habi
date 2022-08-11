<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMeasurementRequest;
use App\Interfaces\SpecialOrderRepositoryInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\Product;

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
        return view('pages.frontend.cart.order', compact('product'));
    }

    public function submitMeasurement(StoreMeasurementRequest $request, $slug)
    {
        $product = $this->getproduct($slug);
        
        $upload = Cloudinary::upload($request->validated()['measurement']->getRealPath())->getSecurePath();

        $data = array(
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'measurement' => $upload
        );

        $this->specialOrderRespository->submitMeasurement($data);

        return redirect()->route('action.success');
        
    }

    public function getProduct($slug)
    {
       return Product::whereSlug($slug)->firstOrFail();
    }

}
