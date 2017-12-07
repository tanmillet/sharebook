@extends('progress-app.layout')

@section('tan-main')
    <section class="vbox" id="bjax-el">
        <section class="scrollable padder-lg">
            <h3 class="font-thin m-b">Project Lists</h3>
            <div class="row row-sm">
                @forelse($projects as $project)

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a href="/pro/project/detail">
                            <div class="item">
                                <div class="pos-rlt">
                                    <img src="/tan-admin/images/m40.jpg" alt=""
                                         class="r r-2x img-full">
                                </div>
                                <div class="padder-v">
                                    <span class="text-ellipsis">{{$project->project_name}}</span>
                                    <span class="text-ellipsis text-xs text-muted">{{$project->project_tag}}</span>
                                </div>
                            </div>
                        </a>
                    </div>

                @empty
                @endforelse


            </div>
        </section>
    </section>

    {{--<section class="vbox">--}}
    {{--<header class="header bg-light b-b">--}}
    {{--<p>Project lists</p>--}}
    {{--</header>--}}
    {{--<section class="scrollable wrapper">--}}
    {{--<div class="">--}}
    {{--<h4 class="m-t-none">--}}
    {{--<a href="/pro/show/project"  class="btn btn-default btn-xs"><i class="icon-plus"></i> &nbsp;项目</a>--}}
    {{--</h4>--}}
    {{--<ul class="list-group gutter list-group-lg list-group-sp sortable">--}}
    {{--<li class="list-group-item bg-info">--}}
    {{--<span class="pull-right">--}}
    {{--<a href="#"><i class="fa fa-bar-chart-o m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="查看项目"></i></a>--}}
    {{--<a href="#"><i class="fa fa-plus fa-fw m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="新加任务"></i></a>--}}
    {{--<a href="#"><i class="fa fa-times fa-fw" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除项目"></i></a>--}}
    {{--</span>--}}
    {{--<span class="pull-left media-xs red" data-toggle="tooltip" data-placement="top" title="" data-original-title="项目编号"><i class="fa fa-sort text-muted fa m-r-sm"></i>N01</span>--}}
    {{--<div class="clear text-white">--}}
    {{--<a href="/pro/project/detail">Shark book system 共享书籍系统 能帮助用户读书的好习惯，提高用户的阅读能力，扩展用户的知识面。</a>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="list-group-item bg-info">--}}
    {{--<span class="pull-right">--}}
    {{--<a href="#"><i class="fa fa-bar-chart-o m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="查看项目"></i></a>--}}
    {{--<a href="#"><i class="fa fa-plus fa-fw m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="新加任务"></i></a>--}}
    {{--<a href="#"><i class="fa fa-times fa-fw" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除项目"></i></a>--}}
    {{--</span>--}}
    {{--<span class="pull-left media-xs red" data-toggle="tooltip" data-placement="top" title="" data-original-title="项目编号"><i class="fa fa-sort text-muted fa m-r-sm"></i>N01</span>--}}
    {{--<div class="clear text-white">--}}
    {{--<a href="/pro/project/detail">Shark book system 共享书籍系统 能帮助用户读书的好习惯，提高用户的阅读能力，扩展用户的知识面。</a>--}}
    {{--</div>--}}
    {{--</li>--}}


    {{--<li class="list-group-item">--}}

    {{--<span class="pull-right">--}}

    {{--<a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a>--}}

    {{--<a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a>--}}

    {{--<a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a>--}}

    {{--</span>--}}

    {{--<span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 05</span>--}}

    {{--<div class="clear">--}}

    {{--HTML5 doctype required--}}

    {{--</div>--}}

    {{--</li>--}}

    {{--</ul>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--</section>--}}
@endsection

@section('tan-js')
    <script src="/tan-admin/js/sortable/jquery.sortable.js"></script>
    <script src="/tan-admin/js/nestable/jquery.nestable.js"></script>
@endsection