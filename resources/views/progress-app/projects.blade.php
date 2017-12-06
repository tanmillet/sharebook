@extends('tan-admin.layout')

@section('tan-main')
    <section class="vbox">
        <header class="header bg-light b-b">
            <p>Project lists</p>
        </header>
        <section class="scrollable wrapper">
            <div class="">
                <h4 class="m-t-none"></h4>
                <ul class="list-group gutter list-group-lg list-group-sp sortable">
                    <li class="list-group-item bg-info">
                    <span class="pull-right">
                      <a href="#"><i class="fa fa-bar-chart-o m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="查看项目"></i></a>
                      <a href="#"><i class="fa fa-plus fa-fw m-r-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="新加任务"></i></a>
                      <a href="#"><i class="fa fa-times fa-fw" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除项目"></i></a>
                    </span>
                        <span class="pull-left media-xs red" data-toggle="tooltip" data-placement="top" title="" data-original-title="项目编号"><i class="fa fa-sort text-muted fa m-r-sm"></i>N01</span>
                        <div class="clear text-white">
                            <a href="/pro/project/detail">Shark book system 共享书籍系统 能帮助用户读书的好习惯，提高用户的阅读能力，扩展用户的知识面。</a>
                        </div>

                    </li>

                    <li class="list-group-item bg-primary">

                    <span class="pull-right">

                      <a href="#"><i class="fa fa-pencil fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-plus fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-times fa-fw"></i></a>

                    </span>

                        <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 02</span>

                        <div class="clear text-white">

                            Looking for more example templates

                        </div>

                    </li>

                    <li class="list-group-item bg-success">

                   <span class="pull-right">

                      <a href="#"><i class="fa fa-pencil fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-plus fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-times fa-fw"></i></a>

                    </span>

                        <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 03</span>

                        <div class="clear text-white">

                            Customizing components

                        </div>

                    </li>

                    <li class="list-group-item">

                    <span class="pull-right">

                      <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a>

                    </span>

                        <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 04</span>

                        <div class="clear">

                            The fastest way to get started

                        </div>

                    </li>

                    <li class="list-group-item">

                    <span class="pull-right">

                      <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a>

                      <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a>

                    </span>

                        <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 05</span>

                        <div class="clear">

                            HTML5 doctype required

                        </div>

                    </li>

                </ul>
            </div>
        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/js/sortable/jquery.sortable.js"></script>
    <script src="/tan-admin/js/nestable/jquery.nestable.js"></script>
@endsection