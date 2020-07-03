<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use Gate;
use App\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
        if (!Gate::allows('isAdmin')) {
        	return view('user.login');
        }
        
    }
    public function hapus (Request $req, $id){
    	if (!empty($id)) {
    		$data = $req->all();
    		User::where(['id'=>$id])->delete();
    		return redirect()->back();
    	}
    }

    public function buatuser(){
        return view('admin.buat_user');
    }
    public function tambahuser(Request $req){
        $data = $req->all();
        if ($data['pass']==$data['cpass']) {
            $user = new User;
            $user->name = $data['nama'];
            $user->username = $data['username'];
            $user->password = Hash::make($data['pass']);
            $user->save();

            $users = User::where(['roll'=>'2'])->get();
            return view('admin.index')->with(compact('users'));
        }else{
            return redirect()->back();
        }

    }

    public function ubahpass(){
        return view('admin.ubah_pass');
    }
    public function ubahpassx(Request $req){
        $data = $req->all();
        if ($data['pass']==$data['cpass']) {
            User::where(['roll'=>'1'])->update([
                'password'=>Hash::make($data['pass'])
            ]);

            $users = User::where(['roll'=>'2'])->get();
            return view('admin.index')->with(compact('users'));
        }else{
            return redirect()->back();
        }
    }
}
