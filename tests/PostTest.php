<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 30/11/2016
 * Time: 13:59
 */


class PostTest extends TestCase
{

    public function test()
    {
        $this->post2();
    }

    public function post2()
    {
        $data = [
            'content' => 'string'."\n",
        ];
        $this->post('http://localhost:8888/post',$data);
    }

}