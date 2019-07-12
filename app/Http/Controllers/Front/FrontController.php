<?php

namespace App\Http\Controllers\Front;

use App\Model\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\BaseController;
use Illuminate\Support\Facades\Config;
use App\Model\Post;
use App\Model\Product;
use App\Model\Category;
use App\Model\Contact;
use App\Model\Intro;
use Illuminate\Support\Facades\Mail;

class FrontController extends BaseController
{

    protected $Product;
    protected $Post;
    protected $Category;

    public function __construct(Product $product,Post $post,Category $category)
    {
        parent::__construct();
        $this->Product = $product;
        $this->Post = $post;
        $this->Category = $category;
    }

    public function index(){
        $data['menu'] = 'home';
        $data['categoryProductHot'] = Category::getParentCategory('product',true,true);
        $data['categoryPostHot'] = Category::getParentCategory('post',true,true);
        $data['products'] = $this->Product->getListForFront();
        $data['posts'] = $this->Post->getListForFront();
        $data['home'] = true;
        return view('front.index',$data);
    }

    public function allProduct(Request $request,$slug = null){
        $data['menu'] = 'product';
        $filter = $request->all();
        if($slug != null){
            $cate = $this->Category->with('parent')->where('slug',$slug)->first();
            if($cate){
                $this->renderSeo($cate);
                $data['cate'] = $cate;
                $filter['category_id'] = Category::getAllIdsRelation($cate->id);
            }else{
                return view('errors.404');
            }
        }
        $data['filter'] = $filter;
        $data['flagLinks'] = 1;
        $data['products'] = $this->Product->getListForFront(true,$filter,16);
        return view('front.product.list',$data);
    }

    public function detailProduct(Request $request,$slug){
        $data['menu'] = 'product';
        $data = [];
        $product = $this->Product->where('slug',$slug)->with('details')->with('category')->first();
        if($product){
            $product->views = $product->views + 1;
            $product->save();
            $data['product'] = $product;
            $data['products'] = Product::getProductSame($product->id,$product->category_id);
        }else{
            return view('errors.404');
        }
        return view('front.product.detail_product',$data);
    }

    public function allPost(Request $request,$slug = null){
        $data['menu'] = 'post';
        $filter = $request->all();
        if($slug != null){
            $cate = $this->Category->where('slug',$slug)->first();
            if($cate){
                $data['cate'] = $cate;
                $filter['category_id'] = $cate->id;
            }else{
                return view('errors.404');
            }
        }
        $data['filter'] = $filter;
        $data['posts'] = $this->Post->getListForFront(true,$filter,18);
        $data['categorys'] = $this->Category->where('type',Category::TYPE_POST)->get();
        return view('front.post.list',$data);
    }

    public function detailPost(Request $request,$slug){
        $data['menu'] = 'post';
        $post = $this->Post->where('slug',$slug)->with('category')->first();
        if($post){
            $post->views = $post->views + 1;
            $post->save();
            $data['post'] = $post;
            $data['posts'] = Post::getPostSame($post->id,$post->category_id);
        }else{
            return view('errors.404');
        }
        return view('front.post.detail_post',$data);
    }

    public function contact(Request $request){
        $menu = 'contact';
        return view('front.contact',compact('menu'));
    }

    public function addContact(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);
        $contact = new Contact($request->only('name','phone','email','content'));
        $contact->save();
        // $account_mail = Information::where('key','account_mail')->first();
        // Mail::send('front.mail.email', array('name'=>$contact->name,'phone' => $contact->phone,'email'=>$contact->email, 'content'=>$contact->content), function($message) use ($account_mail){
        //     $message->to($account_mail->value, 'Quản trị')->subject('Người dùng liên hệ!');
        // });

        return redirect()->back()->with([
            'alert_message' => Config::get('constants.CONTACT_SUCCESS'),
        ]);
    }

    public function intro(Request $request){
        $menu = 'intro';
        $intro = Intro::first();
        return view('front.intro',compact('intro','menu'));
    }



}
