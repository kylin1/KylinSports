{{--输入学生信息的form--}}

<div class="panel-body">
    {{--整个输入信息的表单区域,添加URL方法可处理的路由--}}
    {{--action为空,默认提交到当前方法里面去,就是create--}}
    <form class="form-horizontal" action="{{ url('/post') }}" method="post">

        {{--Laravel自动为每个用户Session生成了一个CSRF Token，
        该Token可用于验证登录用户和发起请求者是否是同一人，如果不是则请求失败。
        Laravel提供了一个全局帮助函数csrf_token来获取该Token值，
        在视提交图表单中添加如下HTML代码即可在请求中带上Token：--}}
        {{ csrf_field() }}

        {{--第一行输入姓名区域--}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-5">
                {{--输入框的名称为对象属性数组,传入后台的界面是个数组--}}
                <input type="text" name="Student[name]"
                       {{-- old取session暂存的数据,如果有则使用这个
                            没有则为修改数据,使用参数中的--}}
                       value="{{ old('Student')['name'] ? old('Student')['name'] : $student->name}}"

                       class="form-control" id="name" placeholder="请输入学生姓名">
            </div>
            <div class="col-sm-5">
                {{--获取错误信息--}}
                <p class="form-control-static text-danger">{{ $errors->first('Student.name') }}</p>
            </div>
        </div>

        {{--第二行输入年龄区域--}}
        <div class="form-group">
            <label for="age" class="col-sm-2 control-label">年龄</label>
            <div class="col-sm-5">
                <input type="text" name="Student[age]"
                       value="{{ old('Student')['age'] ? old('Student')['age'] : $student->age}}"

                       class="form-control" id="age" placeholder="请输入学生年龄">
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger">{{ $errors->first('Student.age') }}</p>
            </div>
        </div>

        {{--第三行,选取性别区域--}}
        <div class="form-group">
            <label class="col-sm-2 control-label">性别</label>

            <div class="col-sm-5">

                {{--从控制器返回的一个实例中获取SEX的键值对,以便显示--}}
                @foreach($student->sex() as $id=>$value)
                    <label class="radio-inline">
                        {{--赋值给一个数组,数值为性别--}}
                        <input type="radio" name="Student[sex]"
                               {{--如果性别已经有了,则标记为点击--}}
                               {{ isset($student->sex) && $student->sex == $id ?
                               'checked' : ''  }}
                               value="{{ $id }}"> {{ $value }}
                    </label>
                @endforeach

            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger">{{ $errors->first('Student.sex') }}</p>
            </div>
        </div>

        {{--第四行,提交按钮--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>
