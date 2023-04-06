<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Product

        // Admin
    function indexadmin()
    {
        $product = new Product();
        $products = $product->all();
        return view('admin.data_table')->with('products',$products);
    }

    function store(Request $req)
    {
        // dd($req->all());

        $product = new Product();

        if($req->hasfile('imgpath'))
        {
            $image_file = $req->file('imgpath');

            $image_ext = $image_file->getClientOriginalExtension();

            $image_name = "img_".rand(123456,999999).".".$image_ext;

            $destination_path = public_path('/product_images');

            $image_file->move($destination_path,$image_name);
        }

        $product->name = $req->name;
        $product->category = $req->category;
        $product->color = $req->color;
        $product->size = $req->size;
        $product->price = $req->price;
        $product->imgpath = $image_name;
        $product->save();

        return redirect('admin99');
    }

    function edit($id)
    {
        $products = new Product();
        $product = $products->find($id);

        return view('admin.edit_product_form')->with('product', $product);
    }

    function update(Request $req)
    {
        // dd($req->all());

        $product = Product::find($req->id);


        if($req->hasfile('imgpath'))
        {
            if($req->hasfile('imgpath') && $req->imgpath != '')
            {
                $existing_image = public_path("product_images/".$product->imgpath);
                if(file_exists($existing_image)){
                    unlink($existing_image);
                }
            }
            $image_file = $req->file('imgpath');

            $image_ext = $image_file->getClientOriginalExtension();

            $image_name = "img_".rand(123456,999999).".".$image_ext;

            $destination_path = public_path('/product_images');

            $image_file->move($destination_path,$image_name);
        }

        $product->name = $req->name;
        $product->category = $req->category;
        $product->color = $req->color;
        $product->size = $req->size;
        $product->price = $req->price;
        $product->imgpath = $image_name;
        $product->save();

        return redirect('admin99/data');

    }

    function destroy($id)
    {
        $product = Product::find($id);
        if($product->imgpath != '')
        {
            $existing_image = public_path("product_images/" .$product->imgpath);
            if(file_exists($existing_image)){
                unlink($existing_image);
            }
        }
        $product->delete();

        return redirect('admin99/data');
    }


    // Client Side
    function index()
    {
        $product = new Product();
        $products = $product->all();
        return view('products')->with('products',$products);
    }

    function single_product($id)
    {
        $products = new Product();
        $product = $products->find($id);

        return view('single_product')->with('product', $product);
    }
}
