@extends('progress-app.layout')

@section('tan-main')
    <section class="vbox">
        <section class="scrollable">
            <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                    <section class="vbox">
                        <section class="scrollable">
                            <div class="wrapper">
                                <div class="text-center m-b m-t">
                                    <a href="#" class="thumb-lg">
                                        <img src="/tan-admin/images/a0.png" class="img-circle">
                                    </a>
                                    <div>
                                        <div class="h3 m-t-xs m-b-xs">{{$project->project_name}}</div>
                                        <small class="text-muted"><i
                                                    class="fa fa-map-marker"></i> {{$project->project_creater}}</small>
                                    </div>
                                </div>
                                <div class="panel wrapper">
                                    <div class="row text-center">
                                        <div class="col-xs-6">
                                            <a href="#">
                                                <span class="m-b-xs h4 block">245</span>
                                                <small class="text-muted">Followers</small>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#">
                                                <span class="m-b-xs h4 block">55</span>
                                                <small class="text-muted">Following</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-justified m-b">
                                    <a class="btn btn-info btn-rounded" href="/pro">
                                        <i class="fa fa-list-ul"></i> 项目
                                    </a>
                                    <a class="btn btn-dark btn-rounded" href="/pro/show/task">
                                        <i class="fa fa-plus"></i> 任务
                                    </a>
                                </div>
                                <div>
                                    <small class="text-uc text-xs text-muted">关于项目</small>
                                    <p>{{$project->project_name}}</p>
                                    <small class="text-uc text-xs text-muted">信息</small>
                                    <p>{{$project->project_digest}}</p>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </section>
                    </section>
                </aside>
                <aside class="bg-white">
                    <section class="vbox">
                        <header class="header bg-light lt">
                            <ul class="nav nav-tabs nav-white">
                                <li class="active"><a href="#activity" data-toggle="tab">待处理</a></li>
                                <li class=""><a href="#events" data-toggle="tab">处理中</a></li>
                                <li class=""><a href="#interaction" data-toggle="tab">已完成</a></li>
                                <li class=""><a href="#interaction" data-toggle="tab">已取消</a></li>
                            </ul>
                        </header>
                        <section class="scrollable">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                                        @foreach($tasks as $task)
                                            <li class="list-group-item">
                                                <a href="#" class="thumb-sm pull-left m-r-sm">
                                                    <img src="/tan-admin/images/a0.png">
                                                </a>
                                                <a href="#" class="clear">
                                                    <small class="pull-right">
                                                        <a class="pull-right thumb-sm avatar"><img
                                                                    src="/tan-admin/images/a6.png" style="width: 30px;"
                                                                    alt="..."></a>
                                                        <a class="pull-right thumb-sm avatar"><img
                                                                    src="/tan-admin/images/a6.png" style="width: 30px;"
                                                                    alt="..."></a>
                                                        <a class="pull-right thumb-sm avatar"><img
                                                                    src="/tan-admin/images/a6.png" style="width: 30px;"
                                                                    alt="..."></a>
                                                    </small>
                                                    <strong class="block">
                                                        <a href=""><span
                                                                    style="color: #4cb6cb;"> {{$task->task_tag}}</span> {{$task->task_title}}
                                                        </a>
                                                    </strong>
                                                    <small style="font-size: 12px;">{{$task->task_title}}</small>
                                                    <small>
                                                        <div class="comment-action m-t-sm">
                                                            <a href="#" class="btn btn-xs btn-default m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务优先度"><span
                                                                        style="color: red;font-weight: bold;">{{$task->task_priority}}</span></a>
                                                            <div class="btn-group">
                                                                <button data-toggle="dropdown"
                                                                        class="btn btn-xs btn-default dropdown-toggle m-t-xs">
                                                                    <i class="fa fa-edit"></i>
                                                                    <span class="dropdown-label">{{parser_task_progress($task->task_progress)}}</span>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-select">
                                                                    @foreach(config('progressbase.task_progress') as $key=>$task_progress)
                                                                        <li class=""><input type="radio" name="d-s-r"
                                                                                            value="{{$key}}"><a
                                                                                    href="#">{{$task_progress}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="btn btn-xs btn-default m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务开始时间"><i
                                                                        class="fa fa-calendar"></i> {{$task->task_start_date}}
                                                            </a>
                                                            <a href="#" class="btn btn-xs btn-default m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务结束时间"><i
                                                                        class="fa fa-calendar"></i> {{$task->task_end_date}}
                                                            </a>
                                                            <a href="#" class="btn btn-xs btn-info m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务完成进度">0%</a>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                        class="btn btn-xs btn-default  m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务需要天数">{{diff_between_two_days($task->task_start_date, $task->task_end_date)}}
                                                                    days
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-xs btn-danger  m-t-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="任务剩余天数">
                                                                    {{diff_between_two_days($task->task_end_date , date('Y-m-d' , time()))}}
                                                                    days
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </small>
                                                </a>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="tab-pane" id="events">
                                    <div class="text-center wrapper">
                                        <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                    </div>
                                </div>
                                <div class="tab-pane" id="interaction">
                                    <div class="text-center wrapper">
                                        <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </aside>
                <aside class="col-lg-3 b-l">
                    <section class="vbox">
                        <section class="scrollable padder-v">
                            <div class="panel">
                                <h4 class="font-thin padder">Latest Dynamic Information</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web
                                            application template, have fun1 </p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago
                                        </small>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum
                                            ipsum dolor sit amet, consectetur</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales
                                            nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin
                                            venenatis</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago
                                        </small>
                                    </li>
                                </ul>
                            </div>

                            <div class="panel clearfix">
                                <div class="panel-body">
                                    <a href="#" class="thumb pull-left m-r">
                                        <img src="/tan-admin/images/a0.png" class="img-circle">
                                    </a>
                                    <div class="clear">
                                        <a href="#" class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
                                        <small class="block text-muted">2,415 followers / 225 tweets</small>
                                        <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </aside>
            </section>
        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-project-ctrl"></script>
@endsection