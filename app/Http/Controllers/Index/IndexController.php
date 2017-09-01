<?php
/**
 * Created by PhpStorm.
 * User: dubz
 * Date: 2017/9/1
 * Time: 13:45
 */

namespace App\Http\Controllers\Index;

use App\Model\Article;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $articles = Article::where('post_status',"publish")->get()->toArray();
        foreach($articles as &$v){
            $v['post_desc'] = mb_strcut(strip_tags($v['post_content']),0,218).'...';
        }
        return view("Index/index",["data"=>$articles]);
    }
}
