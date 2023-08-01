<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $newCategory;

    public function addCategory ()
    {
        return view('back.pages.category.addCategory');
    }

    public function newCategory(Request $request)
    {
        Category::newCategorys($request);
        return redirect()->back()->with('message', 'Category created successfully.');
    }

    public function manageCategory()
    {
        return view('back.pages.category.manage', [
            'newCategorys' => Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }

    public function editCategory($id)
    {
        return view('back.pages.category.edit', [
            'editCategorys'   => Category::find($id),
        ]);
    }
    public function deleteCategory($id)
    {
        $this->events = Category::find($id);
        if (file_exists($this->events->image))
        {
            unlink($this->events->image);
        }
        $this->events->delete();
        return redirect()->back()->with('message-for-delete', 'Category Deleted successfully');
    }

    public function updateCategory (Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect()->back()->with('message', 'Category updated successfully');
    }


}
