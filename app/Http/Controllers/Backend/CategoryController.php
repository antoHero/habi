<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interfaces\CategoryRepositoryInterface;
use App\Enums\StatusEnum;

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

        //get validated fields from form
        $validated = $request->validated();

        //return only  safe fields from form
        $validated = $request->safe()->only([
            'name',
            'description'
        ]);

        $data = array(
            'name' => $validated['name'],
            'description' => $validated['description'],
            'status' => StatusEnum::INACTIVE()
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
        $validated = $request->safe()->only([
            'name',
            'description',
            'status'
        ]);

        $data = array(
            'name' => $validated['name'],
            'description' => $validated['description'],
            'status' => $validated['status'] ? 'ACTIVE' : 'INACTIVE'
        );

        $updated = $this->categoryRepository->updateCategory($slug, $data);

        if(!$updated) {
            return redirect()->back()->with('error', 'Category could not be updated');
        } else {
            return redirect()->back()->with('success', 'Category updated successfully');
        }
    }
    
}
