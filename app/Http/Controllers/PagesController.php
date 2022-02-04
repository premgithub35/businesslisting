<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Repositories\Repository;

class PagesController extends Controller
{
    protected $model;

    public function __construct(Pages $page)
    {
        // set the model
        $this->model = new Repository($page);
    }
    public function index()
    {
        $pages = $this->model->all();
        return view('backend.pages.index',compact('pages'));
    }

    public function create()
    {
        return view('backend.pages.add');
    }

    public function edit($id)
    {
        $page = $this->model->show($id);

        return view('backend.pages.edit',compact('page'));
    }

    public function createOrUpdate(Request $request,$id = null)
    {
        $request->validate([
            'title'=>'required',
            'slug'=> 'required',
            'content' => 'required'
          ]);
      
        if($id === null){
           
           $this->model->create($request->only($this->model->getModel()->fillable));
           return redirect()->route('pages')->with('status', 'New Page Created!');
           
        }else{
            $this->model->update($request->only($this->model->getModel()->fillable), $id);
            return redirect()->route('pages')->with('status', 'Page Updated!');
        }
    }

    public function inactive($id)
    {
       $this->model->inactive($id);
       return redirect()->route('pages');

    }

    public function active($id)
    {
       $this->model->active($id);
       return redirect()->route('pages');

    }
}
