<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryProduct;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $about = About::find(1);
        return view('admin.about.index',compact('about'));
    }

    function create(Request $request){
       
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }
       
        $partner =  new About();
        $partner->desc = $request->desc;
        $partner->img  = $image;
        $partner->detail  = $request->detail;
        $partner->save();
        session()->flash('sucess','Thêm mới thành công !');
        return redirect(route('about.index'));
    }

    function update(Request $request, $id){
        
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image =  About::find($id)->img;
        }
       
        $partner =  About::find($id);
        $partner->desc = $request->desc;
        $partner->desc_en = $request->desc_en;
        $partner->desc_ja = $request->desc_ja;
        $partner->img  = $image;
        $partner->detail  = $request->detail;
        $partner->detail_en  = $request->detail_en;
        $partner->detail_ja  = $request->detail_ja;
        $partner->save();
        session()->flash('sucess','Cập nhật thành công !');
        return redirect(route('about.index'));
    }

    function detail(){
        $about =  About::find(1);
        $list_services = CategoryProduct::all();
        $contact = Contact::find(5);
        return view('client.detail_about',compact('about','list_services','contact'));
    }
}
