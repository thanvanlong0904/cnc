<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Stringable;

class CategoryProcuctController extends Controller
{
    function index()
    {
        $list_category = CategoryProduct::paginate(4);
        return view('admin.Category.index', compact('list_category'));
    }

    function create(Request $request)
    {
        $file = $request->file;
        if (!empty($file)) {
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }
        $slug = Str::slug($request->name);
        $partner =  new CategoryProduct();
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->img  = $image;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess', 'Thêm mới thành công !');
        return redirect(route('category.index'));
    }
    function edit($id){
        $categorys = CategoryProduct::find($id);
        return view('admin.Category.edit',compact('categorys'));
    }

    function update(Request $request,$id){
        $file = $request->file;
        if (!empty($file)) {
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image = CategoryProduct::find($id)->img;
        }
        $slug = Str::slug($request->name);
        $partner = CategoryProduct::find($id);
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->img  = $image;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess', 'Cập nhật thành công !');
        return redirect(route('category.edit',$id));
    }
    function delete($id){
        CategoryProduct::where('id',$id)->delete();
        session()->flash('delete','Xóa thành công !');
        return redirect(route('category.index'));
    }
}
