<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(10);
        return view('brand.index', compact('brands'));
    }


    public function create()
    {
        return view('brand.create');
    }


    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;

        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/brands/', $fileName);
            $brand->logo = $fileName;
        }

        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;
        $brand->save();

        // $brand = Brand::create([
        //     "name"=> $request->name,
        //     "logo"=> $request->logo,
        //     "meta_title"=> $request->meta_title,
        //     "meta_description"=> $request->meta_description
        // ]);

        return redirect()->route('brand.index')->with('message','Brand Created Successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $brand = Brand::find($id);
        return view('brand.edit', compact('brand'));
    }


    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update([
            "name"=> $request->name,
            "logo"=> $request->logo,
            "meta_title"=> $request->meta_title,
            "meta_description"=> $request->meta_description
        ]);

        return redirect()->route('brand.index')->with('message','Brand Created Successfully');
    }


    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('message','Brand Deleted Successfully');
    }
}
