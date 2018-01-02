@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none"><i class="fa fa-ban-circle"></i><strong>Oh! </strong> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@else
    <p class="text-muted">请填写好必要的信息再进行下一步操作！</p>
@endif