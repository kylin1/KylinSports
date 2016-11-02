@extends('common.layouts')

@section('title','main')

@section('content')

    {{--引入信息提示区域--}}
    @include('common.message')

    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>添加时间</th>
                    <th width="120">操作</th>
                </tr>
            </thead>

            <tbody>
                {{--读取返回的数据列表,加载到界面上--}}
                @foreach($students as $student)

                    <tr>
                        {{--绘制各项数据--}}
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->sex($student->sex) }}</td>
                        <td>{{ date('Y-m-d',$student->created_at) }}</td>

                        <!--修改数据,链接后台,传入ID参数,
                          这里产生的路由是student/update/1006-->
                        <td>
                            <a id="btn-detail"
                               href="{{ url('/post', ['id' => $student->id]) }}">详情</a>
                            <a id="btn-update"
                               href="{{ url('/post', ['id' => $student->id]) }}">修改</a>
                            <!--onclick="if(confirm('确定删除?') == false)
                                            return false;
                                "-->
                            <a id="btn-delete" href="{{ url('/post', ['id' => $student->id]) }}">删除</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{ $students->render() }}
        </div>
    </div>

@stop


@section('javascript')
    <!--这里引用jquery和wangEditor.js-->
    <script>



        $('#btn-delete').click(function () {

            $.ajax({
                type: 'post',
                data:{
                    _method: 'delete',
                    id : 333
                },
                cache: false,

                success: function (response) {
                    alert("input success")
                }

            });
        });

@stop