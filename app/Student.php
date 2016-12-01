<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 10/10/2016
 * Time: 12:12
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEX_UNKNOWN = 10;
    const SEX_MALE = 20;

    // 指定表名
    protected $table = 'student';

    // 默认以ID作为主键,可以指定
    protected $primaryKey = 'id';

    // 指定允许批量赋值的字段
    protected $fillable = ['name', 'age', 'sex'];

    // 指定不允许批量赋值的字段
    protected $guarded = [];

    // 自动维护时间戳
    public $timestamps = true;
    private $name;
    private $age;
    private $sex;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function sex($id = null){
        $array = [
//            访问PHP类中的成员变量或方法时
//            const或者static,那么就必须使用操作符::
//            如果没有被声明成const或者static,那么就必须使用操作符->

//            类的内部访问const或者static变量或者方法,那么就必须使用自引用的self
//            类的内部访问不为const或者static变量或者方法,那么就必须使用自引用的$this。

//        self是指向当前类的指针,this是指向当前对象的指针

//        这里定义显示在界面上的字符串
            self::SEX_FEMALE => '女',
            self::SEX_MALE => '男',
        ];

//        吐血判断
        if($id !== null){
            return array_key_exists($id,$array)? $array[$id] : $array[self::SEX_UNKNOWN];
        }

        return $array;
    }
}