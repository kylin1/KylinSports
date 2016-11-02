<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 11/10/2016
 * Time: 20:10
 */
namespace App\Http\Middleware;

use Closure;

class Activity{
//    public function handle($request, Closure $next){
//        // 前置操作,时间没有到指定日期则进入拦截页面
//        if (time() < strtotime('2016-10-10')){
//            return redirect('activity0');
//        }
//        // 否则向前传递,进入真正页面
//        return $next($request);
//    }

    //后置操作
    public function handle($request, Closure $next){
        $response = $next($request);
        echo $response;

        //逻辑在请求后执行
        echo '我是后置操作';
    }
}