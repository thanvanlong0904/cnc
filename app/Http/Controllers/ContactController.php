<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $list_contact = Contact::find(5);
     return view('admin.contact.index',compact('list_contact'));
    }

    function update(Request $request){
        // dd($request->all());
        $partner =  Contact::find(5);
        $partner->facebook = 12222;
        $partner->Phone  = $request->phone;
        $partner->zalo  = $request->zalo;
        $partner->Email  = $request->email;
        $partner->adress = $request->address;
        $partner->adress1  = $request->address1;   
        $partner->save();
        session()->flash('sucess','Cập nhật thông tin thành công !');
        return redirect(route('contact.index'));
    }
}
