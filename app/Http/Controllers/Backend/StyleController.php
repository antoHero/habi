<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\{
    StyleRepositoryInterface,
    CategoryRepositoryInterface
};
use App\Http\Requests\{CreateStyleRequest, UpdateStyleRequest};
use Brian2694\Toastr\Facades\Toastr;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;
use App\Models\{Category, Style};
use App\Enums\StatusEnum;

class StyleController extends Controller
{
    protected StyleRepositoryInterface $styleRepository;

    protected CategoryRepositoryInterface $categoryRepository;

    public function __construct(StyleRepositoryInterface $styleRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->styleRepository = $styleRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function stylesIndex()
    {
        $styles = $this->styleRepository->styles();

        return view('pages.dashboard.styles.index', [
            'products' => $styles,
            'page' => array(
                'title' => 'Styles',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function create()
    {
        $categories = $this->categoryRepository->getAllCategories();
        return view('pages.dashboard.styles.new', [
            'categories' => $categories,
            'page' => array(
                'title' => 'Add new style',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function store(CreateStyleRequest $request)
    {
        $upload = Cloudinary::upload($request->validated()['image']->getRealPath())->getSecurePath();
        
        if($upload)
        {
            $this->styleRepository->create([
                'name' => $request->validated()['name'],
                'price' => $request->validated()['price'],
                'description' => $request->validated()['description'],
                'category_id' => $request->validated()['category_id'],
                'image' => $upload,
            ]);

            Toastr::success('Style added successfully :)', 'Success!!');

            return redirect()->back();
        }

        Toastr::error('An error occurred when adding the style :)', 'Error!!');

        return redirect()->back();
    }

    public function style(Style $style)
    {
        $categories = $this->categoryRepository->getAllCategories();
        return view('pages.dashboard.styles.style', [
            'categories' => $categories,
            'style' => $style,
            'page' => array(
                'title' => $style->name,
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function updateStyle(UpdateStyleRequest $request, Style $style)
    {
      if($style->update([
          'name' => $request->validated()['name'] ?? $style->name,
          'price' => $request->validated()['price'] ?? $style->price,
          'image' =>  $style->image ?? Cloudinary::upload($request->validated()['image']->getRealPath())->getSecurePath(),
          'description' => $request->validated()['description'] ?? $style->ocassion,
          'category_id' => $request->validated()['category_id'] ?? $style->category_id,
        ])){
          Toastr::success('Style has been successfully updated :)', 'Success!!');

          return redirect()->route('styles.index');
      }

      Toastr::error('An error ocurred, please try again', 'Error!!');

      return redirect()->route('style.style', $style->slug);
    }

    public function delete(Style $style)
    {
        $style->delete();

        Toastr::success('Style has been successfully deleted :)', 'Success!!');

        return redirect()->back();
    }
}
