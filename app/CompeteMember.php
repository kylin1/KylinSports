<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 13/11/2016
 * Time: 20:30
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class CompeteMember extends Model
{
    // 指定表名
    protected $table = 'compete_user';

    protected $guarded = array();

}