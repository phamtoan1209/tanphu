<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::guard('admin');
    }

    public function uploadFile($file,$path){
        $path = 'public/uploads/'.$path;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $name = time()."_".substr(base64_encode(mt_rand()), 0, 10).".".$file->getClientOriginalExtension();
        $file->move($path,$name);
        return str_replace('public/','',$path).'/'.$name;
    }
}
