<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interfaces\CategoryRepositoryInterface;
use App\Enums\StatusEnum;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class CategoryController extends Controller
{
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function categoryView() {
        return view('pages.dashboard.categories.new', [
            'categories' => $this->categoryRepository->getAllCategories(),
            'page' => array(
                'title' => 'Categories',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function createCategory(CreateCategoryRequest $request) {

        $upload = Cloudinary::upload($request->image->getRealPath())->getSecurePath();

        $data = array(
            'name' => $request->name,
            'description' => $request->description,
            'bg' => $upload
        );

        $newCategory = $this->categoryRepository->createCategory($data);

        if(!$newCategory) {
            return redirect()->back()->with('error', 'Category could not be created');
        } else {
            return redirect()->back()->with('success', 'Category created successfully');
        }
    }

    public function categoryIndex() {
        return view('pages.dashboard.categories.index', [
            'categories' => $this->categoryRepository->getAllCategories(),
            'page' => array(
                'title' => 'Categories',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function category($slug) {
        return view('pages.dashboard.categories.edit', [
            'category' => $this->categoryRepository->category($slug),
            'page' => array(
                'title' => 'Edit Category',
                'breadcrumb' => 'Dashboard'
            )
        ]);
    }

    public function updateCategory(UpdateCategoryRequest $request, $slug) {
      // if($request->hasFile('image')) {
      //   dd('yes');
      // }
        $category = $this->categoryRepository->category($slug);

        $data = array(
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status ? 'ACTIVE' : 'INACTIVE',
            'bg' => $request->image ? Cloudinary::upload($request->image->getRealPath())->getSecurePath() : $category->bg
        );

        $updated = $this->categoryRepository->updateCategory($slug, $data);

        if(!$updated) {
            return redirect()->back()->with('error', 'Category could not be updated');
        } else {
            return redirect()->back()->with('success', 'Category updated successfully');
        }
    }

}
