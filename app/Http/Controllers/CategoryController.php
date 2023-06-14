<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\HttpCache\Store;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return  view('category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('category.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([

            "name"=> $request->name,
            "banner"=> $request->banner,
            "icon"=> $request->icon,
            "meta_title"=> $request->meta_title,
            "meta_description"=> $request->meta_description
        ]);

        return redirect()->route('category.index')->with("success", "Category Created Successfully");
    }

    public function show(string $id)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update([

            "name"=> $request->name,
            "banner"=> $request->banner,
            "icon"=> $request->icon,
            "meta_title"=> $request->meta_title,
            "meta_description"=> $request->meta_description
        ]);

        return redirect()->route('category.index')->with("success", "Category Updated Successfully");
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with("success", "Category Deleted Successfully");
    }
}
