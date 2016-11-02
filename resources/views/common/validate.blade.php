<!-- 所有的错误提示 -->
{{--从session中获取验证的错误信息--}}
@if (count($errors))
<div class="alert alert-danger">
    <ul>
        {{--输出错误信息--}}
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif