<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Events;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontHome extends Controller
{
   public function home ()
   {
       return view('front.pages.home.home',[
           'products'  => Product::orderBy('id', 'DESC')->get()->all(),
           'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),

       ]);
   }

    public function allProducts($brand)
    {
        $products = Product::where('brand', $brand)->orderBy('id', 'DESC')->get();
        $categorys = Category::orderBy('id', 'DESC')->get();

        return view('front.pages.allProducts', [
            'products' => $products,
            'categorys' => $categorys,
            'productsAll' => $brand,
            'products'  => Product::orderBy('id', 'DESC')->get()->all(),
            'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }



    public function productDetails($id)
    {
        return view('front.pages.details', [
            'product'   => Product::find($id),
            'products'  => Product::orderBy('id', 'DESC')->get()->all(),
            'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }



    public function service()
    {
        return view('front.pages.service',[
            'products'  => Product::orderBy('id', 'DESC')->get()->all(),
            'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }



    public function about()
    {
        return view('front.pages.about', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all(),
            'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }

    public function eventsDetails ($id)
    {
        return view('front.pages.events.eventDetails', [
            'event' => Events::find($id),
        ]);
    }

    public function allTree()
    {
        return view('front.pages.seeAll.allTree', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allSeeds()
    {
        return view('front.pages.seeAll.allSeeds', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allAccessories()
    {
        return view('front.pages.seeAll.allAccessories', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allMedicines()
    {
        return view('front.pages.seeAll.allMedicines', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function contacts()
    {
        return view('front.pages.contact',[
            'products'  => Product::orderBy('id', 'DESC')->get()->all(),
            'categorys' =>Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }


}
