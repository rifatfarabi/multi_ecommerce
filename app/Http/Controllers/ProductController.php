<?php

namespace App\Http\Controllers;

use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Symfony\Component\HttpKernel\HttpCache\save;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;

        $product->unit = $request->unit;
        $product->minimum_purchase_qty = $request->minimum_purchase_qty;
        $product->maximum_purchase_qty = $request->maximum_purchase_qty;

        if($request->hasFile('thumbnail_image'))
        {
            $file = $request->file('thumbnail_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $product->thumbnail_image = $filename;
        }

        $product->unit_price = $request->unit_price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->refundable = $request->refundable ? true : false;
        $product->save();


        return redirect()->route('product.index')->with("message","Product Created Successfully");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
