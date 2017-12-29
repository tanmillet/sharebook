@extends('tan-admin.layout')

@section('tan-main')
    {{--<section class="wrapper-lg">--}}
        <section class="scrollable wrapper-lg">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <header class="font-bold panel-heading">类型</header>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">
                                    <span class="badge pull-right">15</span>
                                    操作日志
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <span class="badge pull-right">30</span>
                                    短信消息
                                </a>
                            </li>

                            <li class="list-group-item">
                                <a href="#">
                                    <span class="badge pull-right">9</span>
                                    邮件消息
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <span class="badge pull-right">4</span>
                                    Travel world
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-9">
                    <div class="panel">
                        <h4 class="font-thin padder">Latest Tweets</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application
                                    template, have fun1 </p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                            </li>
                            <li class="list-group-item">
                                <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum
                                    dolor sit amet, consectetur</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec
                                    adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec
                                    adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec
                                    adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec
                                    adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <div class="text-center">
                                    <ul class="pagination pagination">
                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        {{--</section>--}}
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-widget-ctrl"></script>
@endsection