<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(){
        $list_partner = Partner::paginate(4);
        return view('admin.partners.index',compact('list_partner'));
    }
    function show(){
        $partners = Partner::all();
        return view('welcome',compact('partners'));
    }
    function create(Request $request){
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }
        $partner =  new Partner();
        $partner->name = $request->name;
        $partner->img  = $image;
        $partner->save();
        session()->flash('sucess','Thêm mới thành công !');
        return redirect(route('partner.index'));
    }





    function delete($id){
        Partner::where('id',$id)->delete();
        session()->flash('delete','Xóa thành công !');
        return redirect()->back();
    }
}
