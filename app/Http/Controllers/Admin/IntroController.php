<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Config;
use App\Model\Intro;

class IntroController extends BaseController
{
    protected $model;
    protected $list;

    public function __construct(Intro $model)
    {
        $prefix = explode('/',\Route::current()->getPrefix());
        $this->lastPrefix = end($prefix);
        $this->Model = $model;

        // routes in controller
        $this->list = 'admin.'.$this->lastPrefix.'.list';
        $this->createUpdate = 'admin.'.$this->lastPrefix.'.create_update';

        // variables share to view
        view()->share('actionList',$this->lastPrefix.'.list');
        view()->share('actionUpdate',$this->lastPrefix.'.update');
        view()->share('breadcrumb','bài giới thiệu');
        view()->share('modul','intros');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $datas = $this->Model->get();
        return view($this->list,compact('datas'));
    }

    public function create(Request $request,$id){
        $item = $this->Model->findOrFail($id);
        if($request->isMethod('post')){
            $request->validate([
                'content' => 'required'
            ]);
            $datas = $request->only('content');
            $this->Model->updateOrCreate(['id' => $id],$datas);
            return redirect()->route($this->lastPrefix.'.list')->with([
                'alert_message' => Config::get('constants.UPDATE_SUCCESS'),
            ]);
        }
        return view($this->createUpdate,compact('item'));
    }


}
