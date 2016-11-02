<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 学生列表页面
    public function index()
    {
        // 控制每页的个数
        $students = Student::paginate(5);
        // 返回到列表栏
        return view('student.index',[
            'students'=>$students
        ]);
    }

    /**
     * 创建新文章表单页面
     *
     * @return Response
     */
    public function create()
    {
        $student = new Student();
        return view('student.create',[
            'student'=>$student
        ]);
    }

    /**
     * 将新创建的文章存储到存储器
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show!!';
        //
        $student = Student::find($id);
        return view('student.detail',[
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo 'edit!!';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo 'update!! id is ';
        echo $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo 'destroy!! id is ';
        echo $id;
    }
}
