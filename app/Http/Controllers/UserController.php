<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    function index(){
        $list_user = User::paginate(3);
       return view('admin.users.index',compact('list_user'));
    }

    function create(Request $request){
        
        if(Auth::user()->status == 1){
            $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required|unique:users',
                    'pass' => 'required',
                    'check' => 'required',
    
                ],
                [
                    'required'=>':attribute không được để trống',
                    'unique' => ':attribute đã toàn tại'
                ],
                [
                    'check'=>'Phần chọn quản trị',
                ],
               
            );
            
            // dd($request->all());
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->pass);
            $user->status = $request->check;
            $user->save();
            session()->flash('add_user','Thêm admin thành công !');
            return redirect(route('user.index'));
        }else{
            session()->flash('add_erorr','Bạn không có quyền thêm Admin !');
            return redirect(route('user.index'));
        }
      
        
    }

    function edit($id){
        $users = User::find($id);
        $list_user = User::all();
        return view('admin.users.edit',compact('list_user','users'));
    }

    function update(Request $request,$id){
        if(Auth::user()->status == 1){
            $request->validate(
                [   
                    'email' => [
                    'required',
                    Rule::unique('users')->ignore($id)
                ]
                ],
                [
                    'unique' => ':attribute đã toàn tại'
                ],
               
            );
           
            if($request->pass == User::find($id)->password){
                $pass = $request->pass;
            }else{
                $pass =  Hash::make($request->pass);
            }
            // dd($request->all());
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $pass;
            $user->status = $request->check;
            $user->save();
            session()->flash('add_user','Cập nhật thành công !');
            return redirect(route('user.edit',$id));
        }else{
            session()->flash('add_erorr','Bạn không có quyền cập nhật Admin !');
            return redirect(route('user.edit',$id));
        }
      
    }

    function delete($id){
        User::where('id',$id)->delete();
        session()->flash('delete_user','Xóa thành công !');
        return redirect(route('user.index'));
    }
}
