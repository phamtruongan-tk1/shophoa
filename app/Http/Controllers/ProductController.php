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
    public function create()
    {
        $dates = Date::all();
        return view('admin.pages.add-product',[
            'dates' => $dates
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        // $datas['name'] = $request->name;
        $product->image = Str::random(10) . '-' . $request->file('image')->getClientOriginalName();
        $request->image->move('uploads/products/', $product->image);
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();

        $productId = $product->id;
        $dates = $request->date;
        Product::find($productId)->date()->attach($dates);
       
        session()->put('message', 'Đã thêm món ăn');
        return Redirect::back();
    }

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.list-product',[
            'products' => $products
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $dates = Date::all();
        return view('admin.pages.edit-product',[
            'product' => $product,
            'dates' => $dates
        ]);
    }

    public function update(Request $request, $id)
    {   
        $dates = $request->date;
        $productById = Product::find($id);
        
        if (!$request->image) {
            $image = $productById->image;
        } else {
            $image = Str::random(10) . '-' . $request->file('image')->getClientOriginalName();
            $request->image->move('uploads/products/', $image);
        }

        if ($request->name === $productById->name) {
            $input['image'] = $image;
            $input['price'] = $request->price;
            $input['status'] = $request->status;
        } else {
            $productByName = Product::where('name', $request->name)->first();

            if ($productByName) {
                session()->put('message', 'Tên món ăn đã bị trùng');
                return Redirect::back();die();
            }
            $input['name'] = $request->name;
            $input['image'] = $image;
            $input['price'] = $request->price;
            $input['status'] = $request->status; 
        }
        $productById->update($input);
        $productById->date()->sync($dates);

        session()->put('message', 'Đã cập nhật món ăn');
        return Redirect::back();
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->put('message', 'Đã xóa món ăn');
        return Redirect::back();
    }
}
