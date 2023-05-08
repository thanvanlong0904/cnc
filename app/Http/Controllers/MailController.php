<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
   function sendMail(Request $request)
   {
     
      $images = [];
      // dd($request->file);
      if($files=$request->file){
         foreach($files as $file){
            $name=$file->getClientOriginalName();
           $file -> move('public/assets/img',$name);
             $images[]='assets/img/'.$name;
         }
     }
      $email = $request->input('email');
      $phone = $request->input('phone');
      $note = $request->input('note');
      $add  = $request->input('add');

      $data = [
         'phone'=> $phone,
         'email'=>$email,
         'add'=>$add,
         'note'=>$note,
          'images'=>$images
     ];
     Mail::to('cokhichinhxacanhduc@gmail.com')->send(new SendMail($data));
     session()->flash('m-s', 'Gửi thành công !');
     return redirect()->back();

   
   }
}
