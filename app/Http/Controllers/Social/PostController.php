<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller{


    /**
     * new post
     *
     * @param Request $request
     * @return string
     */
    public function storePost(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        $post = new Post;
        $post->content = $request->get('input');
        $post->userid = Auth::user()->id;

        print $request->get('content');

        if ($post->save()) {
            return 'success';
        } else {
            return '发表失败,请重试';
        }
    }

}