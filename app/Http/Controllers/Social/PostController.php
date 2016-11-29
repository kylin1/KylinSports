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

class PostController extends Controller{


    /**
     * new post
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storePost(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        // 数据验证
        $this->validate($request, [
            'content' => 'required', // 必填
        ]);

        $post = new Post;
        $post->content = $request->get('title');
        $post->userid = $request->user()->id;

        if ($post->save()) {
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
}