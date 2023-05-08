<?php

namespace App\Http\Controllers;

use App\Models\Strengths;
use Illuminate\Http\Request;

class StrengthsController extends Controller
{
    function index(){
        $strengths = Strengths::find(1);
        return view('admin.strenghs.edit',compact('strengths'));
    }
    function update(Request $request, $id){
        $file = $request->file;
        if(!empty($file)){
            $file->move('public/assets/img/', $file->getClientOriginalName());
            $image = 'assets/img/' . $file->getClientOriginalName();
        }else{
            $image =Strengths::find($id)->img;
        }
        $strengths = Strengths::find($id);
        $strengths->detail = $request->name;
        $strengths->detail_en = $request->name_en;
        $strengths->detail_ja = $request->name_ja;
        $strengths->img = $image;
        $strengths->save();
        session()->flash('sucess','Cập nhật thành công !');
        return redirect()->route('strengths.index');

    }
}
