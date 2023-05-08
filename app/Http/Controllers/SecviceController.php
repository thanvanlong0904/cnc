<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Secvice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class SecviceController extends Controller
{
    function index(){
        $services = Secvice::all();
        return view('admin.service.index',compact('services'));
    }

    function create(Request $request){
        // dd($request->all());
        $slug = Str::slug($request->name);
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }
        
        $partner =  new Secvice();
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->detail  = $request->detail;
        $partner->detail_en  = $request->detail_en;
        $partner->detail_ja  = $request->detail_ja;
        $partner->img  = $image;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess','Thêm mới thành công !');
        return redirect(route('secvice.index'));
    }
    function edit($id){
       $services = Secvice::find($id);
       return view('admin.service.edit',compact('services'));
    }
    function update(Request $request , $id){
        // dd($request->all());
        $slug = Str::slug($request->name);
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image = Secvice::find($id)->img;
        }
        
        $partner =  Secvice::find($id);
        $partner->name = $request->name;
        $partner->name_en = $request->name_en;
        $partner->name_ja = $request->name_ja;
        $partner->detail  = $request->detail;
        $partner->detail_en  = $request->detail_en;
        $partner->detail_ja  = $request->detail_ja;
        $partner->img  = $image;
        $partner->slug  = $slug;
        $partner->save();
        session()->flash('sucess','Cập nhật thành công !');
        return redirect(route('secvice.edit',$id));
    }
    function detail($slug,$id){
        $services = Secvice::find($id);
        $list_services  = Secvice::all();
        $contact = Contact::find(5);
        return view('client.detail_service',compact('services','list_services','contact') );
    }


    function delete($id){
        Secvice::find($id)->delete();
        session()->flash('delete','Xóa thành công !');
        return redirect(route('secvice.index'));
    }
}
