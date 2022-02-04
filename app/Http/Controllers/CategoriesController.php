<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemType;
use App\Repositories\Repository;

class CategoriesController extends Controller
{
    protected $model;

    public function __construct(ItemType $categories)
    {
        // set the model
        $this->model = new Repository($categories);
    }
    public function index()
    {

        $categories=new ItemType;
        if(request()->filled('id')){
          $categories = $categories->where('id',request('id'));
             }
        if(request()->filled('name')){
          $categories = $categories->where('name',request('name'));
           }
          $categories= $categories->orderBy('id','asc')->paginate(20)->appends(request()->query());
          $total=ItemType::count();

        return view('backend.categories.index',compact('categories','total'));
    }

    public function create()
    {
        return view('backend.categories.add');
    }

    public function edit($id)
    {
        $categories = $this->model->show($id);

        return view('backend.categories.edit',compact('categories'));
    }

    public function createOrUpdate(Request $request,$id = null)
    {
        $request->validate([
            'name'=>'required',
            'content'=>'required',
       
           
          ]);
      
        if($id === null){
           
           $this->model->create($request->only($this->model->getModel()->fillable));
           return redirect()->route('categories')->with('status', 'New Categories Created!');
           
        }else{
            $this->model->update($request->only($this->model->getModel()->fillable), $id);
            return redirect()->route('categories')->with('status', 'categories Updated!');
        }
    }

    public function inactive($id)
    {
      $this->model->inactive($id);
       return redirect()->route('categories');
    }
     public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('categories');

    }
}