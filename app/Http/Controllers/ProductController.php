<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $product;
    public function addProduct()
    {
        return view('back.pages.products.add',[
            'allCategorys' => Category::orderBy('id' , 'DESC')->get(),
        ]);
    }

    public function newProduct(Request $request)
    {
        Product::newProduct($request);
        return redirect()->back()->with('message', 'Product created successfully.');
    }

    public function manageProduct()
    {
        return view('back.pages.products.manage', [
            'products' => Product::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editProduct($id)
    {
        return view('back.pages.products.edit', [
            'product'   => Product::find($id),
            'allCategorys' => Category::all(),
        ]);
    }
    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message-for-delete', 'product deleted successfully');
    }

    public function updateProduct (Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect()->back()->with('message', 'product updated successfully');
    }
}
