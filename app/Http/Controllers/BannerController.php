<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function index(){
        $list_banner = Banner::paginate(3);
        return view('admin.banner.index',compact('list_banner'));
    }

    function create(Request $request){
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'detail' => 'required',
            ],
            [
                'required'=>':attribute không được để trống',
                'unique' => ':attribute đã toàn tại'
            ],
            [
                'desc'=>'Mô tả',
                'detail'=>'Chi tiết banner'
            ],
           
        );
        $slug = Str::slug($request->name);
        $file = $request->file;
        if(!empty($file)){
             $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image = 'images/adw-106.jpg';
        }
        // dd($request->all());
        $user = new Banner();
        $user->name = $request->name;
        $user->desc = $request->desc;
        $user->detail = $request->detail;
        $user->nam_ja = $request->name_ja;
        $user->desc_ja = $request->desc_ja;
        $user->detail_ja = $request->detail_ja;
        $user->name_en = $request->name_en;
        $user->desc_en = $request->desc_en;
        $user->detail_en = $request->detail_en;
        $user->image =$image;
        $user->slug =$slug;
        $user->save();

        session()->flash('add_banner','Thêm bannerthành công !');
        return redirect(route('banner.index'));
    }

    function edit($id){
        $banner = Banner::find($id);
         return view('admin.banner.edit',compact('banner'));
    }

    function update(Request $request,$id){
        $request->validate(
            [
                'name' => 'required',
                'desc' => 'required',
                'detail' => 'required',
            ],
            [
                'required'=>':attribute không được để trống',
                'unique' => ':attribute đã toàn tại'
            ],
            [
                'desc'=>'Mô tả',
                'detail'=>'Chi tiết banner'
            ],
           
        );
        $slug = Str::slug($request->name);
        $banner = Banner::find($id);
        $file = $request->file;

        if(!empty($file)){
             $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image = $banner->image;
        }
        // dd($request->all());
        $user = Banner::find($id);
        $user->name = $request->name;
        $user->desc = $request->desc;
        $user->detail = $request->detail;
        $user->nam_ja = $request->name_ja;
        $user->desc_ja = $request->desc_ja;
        $user->detail_ja = $request->detail_ja;
        $user->name_en = $request->name_en;
        $user->desc_en = $request->desc_en;
        $user->detail_en = $request->detail_en;
        $user->image =$image;
        $user->slug =$slug;
        $user->save();

        session()->flash('edit_banner','Sửa banner thành công !');
        return redirect(route('banner.edit',$id));
    }

    function delete($id){
        Banner::where('id',$id)->delete();
        return redirect(route('banner.index'));
    }

    // client

    function show(){

    }
    function test($id){
        $banner = Banner::find($id);
        return view('test',compact('banner'));
    }
     function detail($slug,$id){
        
        $contact = Contact::find(5);
          $banner_detail =  Banner::find($id);
          $banner = Banner::all();
          return view('client.detail_banner',compact('banner_detail','banner','contact'));
    }
}
