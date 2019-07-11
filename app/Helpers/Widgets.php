<?php

namespace app\Helpers;

class Widgets {

    public static function getFormSeo($item = false){
        return view('widgets.form_seo',['item' => $item]);
    }

    public static function htmlSeo(){
        return view('widgets.html_seo');
    }
}