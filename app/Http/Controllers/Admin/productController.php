<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\HttpRequest;
use PHPUnit\Runner\Extension\Extension;
use Stringable;

class productController extends Controller
{
    public function list()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.list', compact('products'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find(decrypt($id));
        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function save(ProductSaveRequest $request)
    {
        $input = $request->validated();
        if ($request->hasFile('photo')) {
            $extension = $request->photo->extension();
            $filename = Str::random(5) . "_" . time() . "_product." . $extension;
            $request->photo->storeAs('photo', $filename);
            $input['photo'] = $filename;
        }
        Product::create($input);
        return redirect()->route('admin.products.list')->with('message', 'Item successfully inserted');
    }
    public function update(ProductSaveRequest $request)
    {
        $input = $request->validated();
        $product = Product::find(decrypt($request->product_id));

        if ($request->hasFile('photo')) {
            Storage::delete('photo/' . $product->photo);
            $extension = $request->photo->extension();
            $filename = Str::random(5) . "_" . time() . "_product." . $extension;
            $request->photo->storeAs('photo', $filename);
            $input['photo'] = $filename;
        }
        $product->update($input);
        return redirect()->route('admin.products.list')->with('message', 'Item successfully updated');
    }

    public function delete($id)
    {
        $product = Product::find(decrypt($id));
        if (!empty($product)) {
            Storage::delete('photo/' . $product->photo);
        }

        $product->delete();
        return redirect()->route('admin.products.list')->with('message', 'Item successfully deleted');
    }
}
