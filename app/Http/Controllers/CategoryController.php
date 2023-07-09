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

        $category = new Category();
        $category->name = $request->name;

        if($request->hasFile('banner'))
        {
            $file = $request->file('banner');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/categories/', $filename);
            $category->banner = $filename;

        }
        if($request->hasFile('icon'))
        {
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banners/', $filename);
            $category->icon = $filename;

        }
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;

        $category->save();


        // $category = Category::create([

        //     "name"=> $request->name,
        //     "banner"=> $request->banner,
        //     "icon"=> $request->icon,
        //     "meta_title"=> $request->meta_title,
        //     "meta_description"=> $request->meta_description
        // ]);

        return redirect()->route('category.index')->with("message", "Category Created Successfully");
    }

    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
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

        return redirect()->route('category.index')->with("message", "Category Updated Successfully");
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with("message", "Category Deleted Successfully");
    }
}
