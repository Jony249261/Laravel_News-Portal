<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $page_name = 'Category';
        $data = Category::all();
        return view('admin.category.list',compact('page_name','data'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $this->validate($request, [ 
            'name'=>'required'
          ],[
            'name.required'=>"Name Field is Required",
           ]); 
         
         $category = new Category();
         $category->name = $request->name;
         $category->status = 0;

         $category->save();
         
        Session::flash('success','Category Created Successfully');
        return redirect()->action('Admin\CategoryController@list');
    }

    public function active($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        Session::flash('success','Category Active Successfully');
        return redirect()->back();
    }

    public function inactive($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        Session::flash('success','Category Inactive Successfully');
        return redirect()->back();
    }

    public function edit($id){
        $page_name = 'Category Edit';
        $category = Category::find($id);
        return view('admin.category.edit', compact('category', 'page_name'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
         'name' => 'required',  

        ],[
           'name.required' => "Name field is required",

        ]);
     
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

  Session::flash('success','Category Updated Successfully');
        return redirect()->action('Admin\CategoryController@list');
    }

    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        
        Session::flash('success','Category Deleted Successfully');
        return redirect()->back();
    }
}
