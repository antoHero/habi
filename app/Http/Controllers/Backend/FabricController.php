<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{CreateFabricRequest, UpdateFabricRequest};
use App\Interfaces\{FabricRepositoryInterface, StockRepositoryInterface, ProductRepositoryInterface};
use App\Enums\{StatusEnum, StockEnum, ProductEnum};
use App\Models\Stock;
use Brian2694\Toastr\Facades\Toastr;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;

class FabricController extends Controller
{
    private FabricRepositoryInterface $fabricRepository;
    private StockRepositoryInterface $stockRepository;
    private ProductRepositoryInterface $productRepository;

    public function __construct(FabricRepositoryInterface $fabricRepository,
                                StockRepositoryInterface $stockRepository,
                                ProductRepositoryInterface $productRepository)
    {
      $this->fabricRepository = $fabricRepository;
      $this->stockRepository = $stockRepository;
      $this->productRepository = $productRepository;
    }

    public function fabricsIndex()
    {
      return view('pages.dashboard.fabrics.index', [
          'products' => $this->fabricRepository->getAllFabrics(),
          'page' => array(
              'title' => 'Fabrics',
              'breadcrumb' => 'Dashboard'
          )
      ]);
    }

    public function newFabricView()
    {
      return view('pages.dashboard.fabrics.new', [
          'page' => array(
              'title' => 'Add new fabric',
              'breadcrumb' => 'Dashboard'
          )
      ]);
    }

    public function createNewFabric(CreateFabricRequest $request)
    {

      $validated = $request->safe()->only([
        'name',
        'qty',
        'price',
        'image'
      ]);

      // $upload = cloudinary()->upload($validated['image']->getRealPath(), [
      //     'folder' => 'habi/product_pictures/',
      //     'resource_type' => 'image'
      // ])->getSecurePath();

      // $upload = (new UploadApi())->upload($validated['image']);

      $upload = Cloudinary::upload($validated['image']->getRealPath())->getSecurePath();

      $data = array(
          'name' => $validated['name'],
          'price' => $validated['price'],
          'image' => $upload,
          'qty' => $validated['qty'],
      );

      $fabric = $this->fabricRepository->createNewFabric($data);

      if($fabric)
      {
        $product = $this->productRepository->createApparel([
          'name' => $fabric->name,
          'amount' => $fabric->price,
          'image' => $fabric->image,
          'qty' => $fabric->qty,
          'fabric_id' => $fabric->id,
          'type' => ProductEnum::FABRIC()
        ]);

        $this->stockRepository->addToStock([
          'product_id'=> $product->id,
          'qty' => $fabric->qty,
          'sku' => 'SKU' . Str::random(10),
          'status' => StockEnum::AVAILABLE()
        ]);

        Toastr::success('Fabric created successfully :)', 'Success!!');

        return redirect()->route('create.apparel.attributes', ['slug' => $product->slug, 'type' => $product->type]);

      }

      Toastr::error('An error occurred :)', 'Error!!');

      return redirect()->back();

    }

    public function getFabric($slug)
    {
      $fabric = $this->fabricRepository->fabric($slug);

      return view('pages.dashboard.fabrics.show', [
        'fabric' => $fabric,
        'attributes' => $this->productRepository->attributes($fabric->id),
        'page' => array(
            'title' => 'Fabric',
            'breadcrumb' => 'Dashboard'
        )
      ]);
    }

    public function updateFabric(UpdateFabricRequest $request, $slug)
    {
      $fabric = $this->fabricRepository->fabric($slug);

      $this->fabricRepository->updateFabric($slug, [
        'name' => $fabric->name ?? $request->name,
        'qty' => $fabric->qty ?? $request->qty,
        'price' => $fabric->price ?? $request->price,
        'image' => $fabric->image ?? Cloudinary::upload($validated['image']->getRealPath())->getSecurePath()
      ]);

      Toastr::success('Fabric updated successfully :)', 'Success!!');

      return redirect()->route('fabrics.index');

    }
}
