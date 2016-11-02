<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 10/10/2016
 * Time: 11:02
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    public static function  getMember(){
        return 'kylin member';
    }
}