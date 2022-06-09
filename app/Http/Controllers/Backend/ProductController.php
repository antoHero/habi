<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateApparelRequest;
use App\Http\Requests\CreateAttributeRequest;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Enums\StatusEnum;
use Brian2694\Toastr\Facades\Toastr;
use Cloudinary\Api\Upload\UploadApi;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function apparelsIndex()
    {
        return view('pages.dashboard.products.index', [
            'products' => $this->productRepository->getAllApparels(),
            'page' => array(
                'title' => 'Products',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function newApparelView()
    {
        return view('pages.dashboard.products.new', [
            'categories' => $this->categoryRepository->getAllCategories(),
            'page' => array(
                'title' => 'Add new apparel',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function createNewApparel(CreateApparelRequest $request)
    {
        $validated = $request->safe()->only([
            'name',
            'amount',
            'image',
            'qty',
            'size',
            'occasion',
            'style',
            'material',
            'detail',
            'category_id',
            'sub_category_id'
        ]);

        // $upload = (new UploadApi())->upload($validated['image']->path(), [
        //     'folder' => 'habi/product_pictures/',
        //     'resource_type' => 'image'
        // ]);

        $upload = cloudinary()->upload($validated['image']->getRealPath(), [
            'folder' => 'habi/product_pictures/',
            'resource_type' => 'image'
        ])->getSecurePath();

        $data = array(
            'name' => $validated['name'],
            'amount' => $validated['amount'],
            'image' => $upload,
            'qty' => $validated['qty'],
            'size' => implode(',', $validated['size']),
            'occasion' => $validated['occasion'],
            'style' => $validated['style'],
            'material' => $validated['material'],
            'detail' => $validated['detail'],
            'category_id' => $validated['category_id'],
            'sub_category_id' => $validated['sub_category_id'],
            'is_product' => 1
        );

        if($product = $this->productRepository->createApparel($data)) {

            Toastr::success('Product created successfully :)', 'Success!!');

            return redirect()->route('create.apparel.attributes', $product->slug);
        }

        Toastr::error('An error occurred when creating your product :)', 'Error!!');

        return redirect()->back();

    }

    public function createAttributesView($slug)
    {
        $product = $this->productRepository->apparel($slug);

        return view('pages.dashboard.products.attributes', [
            'product' => $product,
            'page' => array(
                'title' => $product->name,
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function createNewAttribute(CreateAttributeRequest $request, $slug)
    {
        $validated = $request->safe()->only([
            'image',
            'color'
        ]);

        $product = $this->productRepository->apparel($slug);

        if($product)
        {
            $upload = cloudinary()->upload($validated['image']->getRealPath(), [
                'folder' => 'habi/product_pictures/',
                'public_id' => $product->id,
                'resource_type' => 'image'
            ])->getSecurePath();

            $data = array(
                'image' => $upload,
                'color' => $validated['color'],
                'product_id' => $product->id
            );

            if($attribute = $this->productRepository->addNewAttribute($data)) {

                Toastr::success('Image added successfully to apparel :)', 'Success!!');

                return redirect()->back();
            }

            Toastr::error('An error occurred when creating your product :)', 'Error!!');

            return redirect()->back();
        }

        Toastr::error('The requested item was not found :)', 'Error!!');

        return redirect()->back();
    }
}
