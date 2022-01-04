<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\AddRequest;
use App\Models\Date;
use App\Models\Date_product;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;
use Stringable;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create ()
    {
        $dates = Date::all();
        return view('admin.pages.add-product',[
            'dates' => $dates
        ]);
    }

    public function store (Request $request)
    {
        $datas['name'] = $request->name;
        $datas['image'] = Str::random(10) . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/products/', $datas['image']));
        $datas['price'] = $request->price;
        $datas['status'] = $request->status;

        $productId = Product::insertGetId($datas);

        $dates = $request->date;
        foreach ($dates as $value) {
            $input['date_id'] = $value;
            $input['product_id'] = $productId;
            Date_product::insert($input);
        }
        session()->put('message', 'Đã thêm món ăn');
        return Redirect::back();
    }

    public function index ()
    {
        $products = Product::all();
        return view('admin.pages.list-product',[
            'products' => $products
        ]);
    }
}
