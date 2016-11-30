<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable

{
    const SEX_UNKNOWN = 10;
    const SEX_MALE = 20;
    const SEX_FEMALE = 30;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sex($id = null){
        $array = [
//        这里定义显示在界面上的字符串
            self::SEX_FEMALE => '女',
            self::SEX_MALE => '男',
            self::SEX_UNKNOWN => '未知'
        ];

//        吐血判断
        if($id !== null){
            return array_key_exists($id,$array)? $array[$id] : $array[self::SEX_UNKNOWN];
        }

        return $array;
    }
}
