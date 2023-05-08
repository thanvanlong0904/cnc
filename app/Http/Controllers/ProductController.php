<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Contact;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $categorys = CategoryProduct::all();
        $products = Product::paginate(4);
        return view('admin.product.index',compact('categorys','products'));
    }

    function create(Request $request){
        $slug = Str::slug($request->name);
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }
        $file1 = $request->file1;
        if(!empty($file)){
            $file1->move('public/assets/img/', $file1->getClientOriginalName());
            $image1 = 'assets/img/' . $file1->getClientOriginalName();
        }
        $partner =  new Product();
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->img  = $image;
        $partner->img1  = $image1;
        $partner->category_id  = $request->category;
        $partner->ts  = $request->parameter;
        $partner->ts_en  = $request->parameter_en;
        $partner->ts_ja  = $request->parameter_ja;
        $partner->desc  = $request->desc;
        $partner->desc_en  = $request->desc_en;
        $partner->desc_ja  = $request->desc_ja;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess','Thêm mới thành công !');
        return redirect(route('product.index'));
    }
    function edit($id){
        $categorys = CategoryProduct::all();
        $product =Product::find($id);
        return view('admin.product.edit',compact('categorys','product'));
    }
    function update(Request $request,$id){
        
        $slug = Str::slug($request->name);
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image = Product::find($id)->img;
        }
        $file1 = $request->file1;
        if(!empty($file)){
            $file1->move('public/assets/img/', $file1->getClientOriginalName());
            $image1 = 'assets/img/' . $file1->getClientOriginalName();
        }else{
            $image1 = Product::find($id)->img1;
        }
        if($request->category == 0){
            $cate = Product::find($id)->category_id;
        }else{
            $cate =  $request->category;
        }
        $partner =  Product::find($id);
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->img  = $image;
        $partner->img1  = $image1;
        $partner->category_id  = $cate;
        $partner->ts  = $request->parameter;
        $partner->ts_en  = $request->parameter_en;
        $partner->ts_ja  = $request->parameter_ja;
        $partner->desc  = $request->desc;
        $partner->desc_en  = $request->desc_en;
        $partner->desc_ja  = $request->desc_ja;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess','Cập nhật thành công !');
        return redirect(route('product.edit',$id));
    }
    function list($slug,$id){
        $name_category = CategoryProduct::find($id);
        $list_product  = Product::where('category_id',$id)->get();
        $contact =Contact::find(5);
        return view('client.list',compact('name_category','list_product','contact') );
    }

    function detail($slug,$id){
        $details = Product::find($id);
        $lists   = Product::where('category_id',$details->category_id)->get();
        $contact =Contact::find(5);
        return view('client.detail',compact('details','lists','contact'));
    }

    function delete($id){
        Product::where('id',$id)->delete();
        session()->flash('delete','xóa thành công !');
        return redirect(route('product.index'));
    }
}
