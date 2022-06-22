<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Interfaces\SubcategoryRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Enums\StatusEnum;
use App\Models\Category;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class SubcategoryController extends Controller
{
    private SubcategoryRepositoryInterface $subcategoryRepository;
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(
        SubcategoryRepositoryInterface $subcategoryRepository,
        CategoryRepositoryInterface $categoryRepository
        ) {
        $this->subcategoryRepository = $subcategoryRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function subcategoryIndex() {
        return view('pages.dashboard.subcategories.index', [
            'subcategories' => $this->subcategoryRepository->get_sub_categories(),
            'page' => array(
                'title' => 'Subcategories',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function subcategoryView() {
        return view('pages.dashboard.subcategories.new', [
            'categories' => $this->categoryRepository->getAllCategories(),
            'page' => array(
                'title' => 'Add subcategory',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function createSubcsategory(CreateSubcategoryRequest $request) {

        $upload = Cloudinary::upload($request->image->getRealPath())->getSecurePath();

        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'bg' => $upload
        );



        $newsubcategory = $this->subcategoryRepository->create_sub_category($data);

        if(!$newsubcategory) {
            return redirect()->back()->with('error', 'Subcategory could not be created');
        } else {
            return redirect()->back()->with('success', 'Subcategory created successfully');
        }
    }

    public function subcategory($slug) {
        return view('pages.dashboard.subcategories.edit', [
            'categories' => $this->categoryRepository->getAllCategories(),
            'subcategory' => $this->subcategoryRepository->subcategory($slug),
            'page' => array(
                'title' => 'Update subcategory',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function updateSubcategory(UpdateSubcategoryRequest $request, $slug) {
        // dd($request->all());
        $subcategory = $this->subcategoryRepository->subcategory($slug);

        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'status' => $request->status ? 'ACTIVE' : 'INACTIVE',
            'bg' => $request->image
            ?
            Cloudinary::upload($request->image->getRealPath(), [
              'transformation' => [
                'width' => 383,
                'height' => 500
              ]
            ])->getSecurePath()
            : $subcategory->bg
        );

        // dd($data);

        $updated = $this->subcategoryRepository->update_sub_category($slug, $data);

        if(!$updated) {
            return redirect()->back()->with('error', 'Subcategory could not be updated');
        } else {
            return redirect()->route('all.subcategories')->with('success', 'Subcategory updated successfully');
        }


    }

    public function subcategoryAjax($id)
    {
        $subcategories = Category::find($id)->sub_categories;

        return response()->json($subcategories);
    }
}
