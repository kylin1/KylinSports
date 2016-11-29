<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 10/10/2016
 * Time: 11:11
 */

namespace  App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class StudentController extends Controller {

    // 学生列表页面
    public function index(){
        // 控制每页的个数
        $students = Student::paginate(5);
        // 返回到列表栏
        return view('student.index',[
            'students'=>$students
        ]);
    }

    // 不使用action新增学生
    public function create(Request $request){
        if($request->isMethod('POST')){
            // 使用控制器数据验证
            /*
             *
            $this->validate($request,[
                'Student.name' => 'required|min:2',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer'
            ],[
                // 对错误信息进行自定义
                'required' => ':attribute 是必填选项',
                'min' => ':attribute 长度太小',
                'integer' => ':attribute 必须为整数',
            ],[
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);
            // 验证不通过则返回上一个界面,把错误信息存入session中
            // 错误信息被分配到所有视图中,直接使用$errors全局变量获取
            // 从而直接在视图中打印错误信息

            */

            // 2.validator 验证
            $validator = Validator::make($request->input(),[
                'Student.name' => 'required|min:2',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer'
            ],[
                // 对错误信息进行自定义
                'required' => ':attribute 是必填选项',
                'min' => ':attribute 长度太小',
                'integer' => ':attribute 必须为整数',
            ],[
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);

            if ($validator->fails()){
                // 验证失败,返回上个页面,加入错误信息,返回用户输入
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // 验证通过
            $data = $request->input('Student');

            // 调用模型批量赋值的方法
            if (Student::create($data)){
                return redirect('student/index')->with('success','add success!');
            }else{
                return redirect()->back()->with('error','add failed!');
            }
        }

        // 这里不是POST方法,也就是没有点击的情况
        // 给界面返回一个实例以便调用sex()方法
        $student = new Student();
        return view('student.create',[
            'student'=>$student
        ]);
    }

    // 拦截界面URL传来的参数,保存学生
    public function save(Request $request){
        $data = $request->input('Student');
        $student = new Student();

        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->sex = $data['sex'];
        if ($student->save()){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }
    }


    // 修改操作
    // Request在第一个参数,不影响路由
    public function update(Request $request, $id)
    {
        // 使用URL传递对象的KEY
        $student = Student::find($id);

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'Student.name' => 'required|min:2|max:20',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer',
            ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 必须为整数',
            ], [
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);

            // 从界面获取更多的对象数据,使用$request
            $data = $request->input('Student');

            $student->name = $data['name'];
            $student->age = $data['age'];
            $student->sex = $data['sex'];

            if ($student->save()) {
                // 返回到其他地址!!!
                return redirect('student/index')->with('success', '修改成功-' . $id);
            }
        }


        return view('student.update', [
            'student' => $student
        ]);
    }

    public function delete($id)
    {
        $student = Student::find($id);
        if($student->delete()){
            return redirect('student/index')->with('success','删除成功1' . $id);
        }else{
            return redirect('student/index')->with('error','删除失败2' . $id);
        }
    }


    public function detail($id)
    {
        $student = Student::find($id);
        return view('student.detail',[
            'student' => $student
        ]);
    }

    // 1.基本SQL方法
    public function test1(){

        // insert
//        $boox = DB::insert('insert into student(name,age) values(?, ?)',
//            ['kylin222', 20]);
//        var_dump($boox);

        // update
//        $affected_num = DB::update('update student set age = ? where name = ?', [66, 'kylin']);
//        var_dump($affected_num);

        // select
        $student = DB::select('select * from student');
        // 显示的很好看
        dd($student);

        // delete
        // delete from student where id > ? [1001] return number
    }

    // 2.查询构造器
    // insert
    public function query1(){
        $bool = DB::table('student')->insert(
            ['name' => 'new6', 'age' => 123]
        );

        $bool = DB::table('student')->insert(
            ['name' => 'new7', 'age' => 123]
        );

//        $id = DB::table('student')->insertGetId(
//            ['name' => 'new2', 'age' => 123]
//        );
//        var_dump($id);

//        $bool = DB::table('student')->insert(
//            ['name' => 'new3', 'age' => 123],
//            ['name' => 'new4', 'age' => 123]
//        );
    }

    // update
    public function query_update(){

//        $num = DB::table('student')
//            ->where('id', 1001)
//            ->update(['age' => 1]);
//        var_dump($num);

        // 自增/减
        $num = DB::table('student')
            ->where('id', 1002)
            ->increment('age',1);
        var_dump($num);
    }

    // delete
    public function query_delete(){
        $num = DB::table('student')
            ->where('id', '<=', 1002)
            ->delete();
        var_dump($num);

        // truncate 整表删除
    }

    // select
    public function query_select(){
        // get() : all item
//        $num = DB::table('student')
//            ->get();
//
//        // first() : 获取第一条
//        $num = DB::table('student')
//            ->orderBy('age', 'desc')
//            ->get();
//
//        // where
//        $num = DB::table('student')
//            ->where('id', '<=', 1001)
//            ->get();

//        $num = DB::table('student')
//            ->whereRaw('id = ? and age = ?',[1003, 122])
//            ->get();
//        dd($num);

        // pluck 选取字段,投影
//        $num = DB::table('student')
//            ->whereRaw('id = ? and age = ?',[1003, 122])
//            ->pluck('name');

        // list,可以返回键值对数组
//        $num = DB::table('student')
//            ->lists('name', 'id');


//        dd($num);
    }


    // 3.ORM操作,4种
    public function orm1(){
        // 查询表的所有记录
//        $students = Student::all();
//        dd($students);

//        // 根据主键查询
//        $student = Student::find(1003);
//        dd($student);

//        // 根据主键查询,没有就报错
//        $student = Student::findOrFail(1006);
//        dd($student);

        // 查询构造器在ORM中的使用
//        $students = Student::get();

        $students = Student::where('id', 1006)
            ->first();
        dd($students);

        // chunk 分批次查询
//        echo '<pre>';
//        Student::chunk(2, function ($students){
//            var_dump($students);
//            // return false; 终止查询
//        });

        // 群组/聚合函数
//        $num = Student::count();
//        var_dump($num);

        $max = Student::where('id','>','1001')
            ->max('age');
        var_dump($max);
    }

    public function orm2(){

//        $student = new Student();
//        $student->name = 'new_one';
//        $student->age = 15;
//        $student->save();
//        dd($student);

//        //使用模型的create方法新增数据
//        $student = Student::create(
//          ['name'=>'imooc', 'age'=>22]
//        );
//        dd($student);

        // firstOrCreate()
        // 按照属性查找,没有则在数据库插入
        $student = Student::firstOrCreate(
          ['name'=>'imoocs']
        );
        dd($student);

        // firstOrNew()
        // 按照属性查找,没有则新建对象,但是需要自己保存这个对象到数据库 $student->save();
    }

    public function orm3(){
        // 通过模型更新数据
//        $student = Student::find(1003);
//        $student -> name = '1010';
//        $bool = $student->save();
//        var_dump($bool);

        // 结合查询语句批量更新
        $num = Student::where('id','>',1005)->update(
            ['age'=>20]
        );
        var_dump($num);
    }

    public function orm_delete(){
        // 通过模型删除,找不到则报错
//        $student = Student::find('1005');
//        $bool = $student->delete();
//        var_dump($bool);

        // 通过主键删除,没有就返回0
//        $number = Student::destroy([1003,1004]);
//        var_dump($number);

        // 删除制定条件的数据
        $number = Student::where('id','>',1009)
            ->delete();
        var_dump($number);
    }

    // 返回视图,给视图传入数据(数组和字符串)
    public function section1(){

        $students = Student::get();

        $name = 'kylin';
        $array = ['111','222','333'];

        return view('student.section1', [
            'name' => $name,
            'array' => $array,
            'students' => $students
        ]);
    }

    public function urlTest(){
        return 'urlTest';
    }

    // 从URL Request中取出参数
    public function request1(Request $request){
        // 1.取参数
        $name = $request->input('name',"默认数值");

        // 判断是否有参数
        $exist = $request->has('name');

        // 取所有参数
        $paras = $request->all();
//        dd($paras);

        // 判断请求类型
        $request->method();
        $bool = $request->isMethod('GET');

        $is_ajax = $request->ajax();

        // 判断路由格式
        $is_route = $request->is('student/*');
        var_dump($is_route);
        // 获取当前URL
        $request->url();
    }

    // 使用Session传输数据
    public function session1(Request $request){
        // 1.http request session()
//        $request->session()->put('key1','value1');
//        echo $request->session()->get('key1');

        // 2.session()
//        session()->put('key1','value1');
//        session()->get('key1');

        // 3.Session
//        Session::put('key1','value1');
//        // get or get default
//        echo Session::get('key1','default');
//
//        // put an array
//        Session::push('student','aaa');
//        Session::push('student','bbb');
////        $value = Session::get('student');
////        var_dump($value);
//        // 取出数据并删除
//        $value = Session::pull('student');
//        var_dump($value);
//
//        // 取出所有的值
//        Session::all();
//
//        // 判断存在
//        if(Session::has('key11')){
//            echo 'has';
//        }
//
//        // 删除
//        Session::forget('key1');
//        // 删除所有数据
//        Session::flush();
//
//        // 只有第一次访问的时候存在,暂存数据
//        Session::flash('key-false','value-flash');
    }

    public function session2(Request $request){
//        return Session::get('message','default no');
        return Session::get('message', '暂无信息');
    }

    // 返回Response
    public function response(){
//        $data = [
//            'data'=>'kylin',
//            'key'=>'value'
//        ];
//        // 返回JSON格式数据
//        response()->json($data);
//        return $data;

        // 重定向,界面转换
        // 原理使用session里面的flash
//        return redirect('session2')->with('message', '我是快闪数据');

        // action()
        return redirect()->action('StudentController@session2')
            ->with('message','data_here');

        // router 别名跳转
//        return redirect()->route('session2')
//            ->with('message','data_here');

//        return redirect()->back();
    }

    // 中间件,过滤HTTP请求
    public function before_activity1(){
        return "活动1即将开始";
    }

    public function activity1(){
        return "活动1正在开始!!!";
    }

    public function activity2(){
        return "活动2正在开始!!!";
    }
}