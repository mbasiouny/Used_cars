<?php

namespace App\Http\Controllers;
use App\Add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function foo\func;

class Cars_Controller extends Controller
{
    public function add_car(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'model' => 'required|min:2',
                'years' => 'required|max:4',
                'price' => 'required',
                'description' => 'required|min:30|max:100',
                'photo' => 'required|unique:adds'
            ]);
            $newcar = new Add();
            $newcar->user_id = \Auth::user()->id;
            $newcar->model = $request->input('model');
            $newcar->years = $request->input('years');
            $newcar->description = $request->input('description');
            $newcar->price = $request->input('price');
            $newcar->photo = $request->input('photo');
            $newcar->save();
        }
        return view('cars.admin_add');
    }
    public function user_profile()
  {
$product=DB::table('adds')->select('*')->where('user_id',Auth::user()->id)->get();
//return $product;
        $arr=array('product'=>$product);
return view('cars.profile',$arr);
    }
    //method edit car
    public function edit_car(Request $request,$id){
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'model' => 'required|min:2',
                'years' => 'required|max:4',
                'price' => 'required',
                'description' => 'required|min:30|max:100',
                'photo' => 'required|unique:adds'
            ]);
            $newcar=Add::find($id);
            $newcar->user_id = \Auth::user()->id;
            $newcar->model = $request->input('model');
            $newcar->years = $request->input('years');
            $newcar->description = $request->input('description');
            $newcar->price = $request->input('price');
            $newcar->photo = $request->input('photo');
            $newcar->save();
            return redirect("profile");   }
        else {
            $product=Add::find($id);
            $arr=array('product'=>$product);
            return view('cars.edit',$arr);
        }
    }

    //method delete car
    public function delete_car($id){
        $product=Add::find($id);
        $product->delete();
        return redirect("profile");
    }


}
