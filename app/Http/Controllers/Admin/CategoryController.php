<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use App\Model\Category;
use Illuminate\Support\Facades\Config;
class CategoryController extends BaseController
{

    protected $model;

    public function __construct(Category $model)
    {
        $prefix = explode('/',\Route::current()->getPrefix());
        $this->lastPrefix = end($prefix);
        $this->Model = $model;
        $this->list = 'admin.'.$this->lastPrefix.'.list';
        $this->createUpdate = 'admin.'.$this->lastPrefix.'.create_update';
        view()->share('actionList',$this->lastPrefix.'.list');
        view()->share('actionCreate',$this->lastPrefix.'.create');
        view()->share('actionUpdate',$this->lastPrefix.'.update');
        view()->share('actionDelete',$this->lastPrefix.'.delete');
        view()->share('actionBlock',$this->lastPrefix.'.block');
        view()->share('breadcrumb','danh mục');
        view()->share('modul','categorys');
        view()->share('typePost',Category::TYPE_POST);
        view()->share('typeProduct',Category::TYPE_PRODUCT);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $filter = $request->all();
        $datas = $this->Model->getList($filter);
        return view($this->list,compact('datas','filter'));
    }

    /**
     * @param Request $request
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(Request $request, $id = null){
        if($request->isMethod('get')){
            if($id){
                $item = $this->Model->findOrFail($id);
                return view($this->createUpdate,compact('item'));
            }
            return view($this->createUpdate);
        }
        $request->validate([
            'name' => 'required|unique:'.$this->lastPrefix. ($id ? ",id,$id" : ''),
            'type' => 'required'
        ]);
        $data = $request->only('name','type');
        $data['slug'] = str_slug($data['name']);
        $this->Model->updateOrCreate(['id' =>$id ],$data);
        return redirect()->route($this->lastPrefix.'.list')->with([
            'alert_message' => Config::get('constants.UPDATE_SUCCESS'),
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $item = $this->Model->findOrFail($id);
        $item->delete();
        return redirect()->back()->with([
            'alert_message' => Config::get('constants.DELETE_SUCCESS'),
        ]);
    }

}
