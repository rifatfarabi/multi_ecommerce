<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CategoryController extends Controller
{

    public function index()
    {
        return  view('category.index');
    }

    public function create()
    {
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

        Session::flash('success', "Category Created Successfully");
        return redirect()->route('category.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
