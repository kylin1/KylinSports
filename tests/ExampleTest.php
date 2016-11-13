<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()

    {
        $data = [   'hour' => 1,
            'calories' => 100,
            'meters' => 500,
            'steps' => 1500,
            'minutes' => 60,
            'heartrate' => 80
        ];
        $this->post('http://localhost:8888/data/users/2/hourdata',$data);
    }

    public function post_daily_data(){
        $postdata = $data = [   'hour' => 1,
            'calories' => 100,
            'meters' => 500,
            'steps' => 1500,
            'minutes' => 60,
            'heartrate' => 80
        ];
        $postdata = http_build_query($postdata);
        $this->do_post_request('http://localhost:8888/data/users/2/hourdata', $postdata);
    }

    private function do_post_request($url, $data, $optional_headers = null)
    {
        $params = array('http' => array(
            'method' => 'POST',
            'content' => $data
        ));
        if ($optional_headers !== null) {
            $params['http']['header'] = $optional_headers;
        }
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp) {
            throw new Exception("Problem with $url, $php_errormsg");
        }
        $response = @stream_get_contents($fp);
        if ($response === false) {
            throw new Exception("Problem reading data from $url, $php_errormsg");
        }
        return $response;
    }
}
