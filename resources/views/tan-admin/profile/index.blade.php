@extends('tan-admin.layout')

@section('tan-main')
    <section class="scrollable wrapper-lg">
        <div class="row">
            <div class="col-lg-4">
                <section class="panel panel-default">
                    <div class="panel-body">
                        <div class="clearfix text-center m-t">
                            <div class="inline">
                                <div class="easypiechart easyPieChart" data-percent="100" data-line-width="5" data-bar-color="#545ca6" data-track-color="#f5f5f5" data-scale-color="false" data-size="134" data-line-cap="butt" data-animate="1000" style="width: 134px; height: 134px; line-height: 134px;">

                                    <div class="thumb-lg">
                                        <img src="/tan-admin/images/a5.png" class="img-circle" alt="...">
                                    </div>
                                    <canvas width="134" height="134"></canvas>
                                </div>
                                <div class="h4 m-t m-b-xs">谭小米</div>
                                <small class="text-muted"><i class="fa fa-map-marker"></i> 深圳市 . 广东省</small>
                            </div>
                        </div>
                    </div>
                    <div class="padder-md">
                        <small class="text-uc text-xs text-muted">about me</small>
                        <p class="text-xs font-bold">研发工程师</p>
                        <small class="text-uc text-xs text-muted">info</small>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                        <div class="line"></div>
                        <small class="text-uc text-xs text-muted">connection</small>
                        <p class="m-t-sm">
                            <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                        </p>
                    </div>
                    <footer class="panel-footer bg-primary text-center">
                        <div class="row pull-out">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <span class="m-b-xs h3 block text-white">245</span>
                                    <small class="text-muted">Followers</small>
                                </div>
                            </div>
                            <div class="col-xs-4 dk">
                                <div class="padder-v">
                                    <span class="m-b-xs h3 block text-white">55</span>
                                    <small class="text-muted">Following</small>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <span class="m-b-xs h3 block text-white">2,035</span>
                                    <small class="text-muted">Tweets</small>
                                </div>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
            <div class="col-lg-8">
                <section class="panel panel-default">
                    <section class="comment-list block">
                        <article id="comment-id-4" class="comment-item">

                            <a class="pull-left thumb-sm avatar"><img src="/tan-admin/images/a5.png" alt="..."></a>

                            <span class="arrow left"></span>

                            <section class="comment-body panel panel-default">

                                <header class="panel-heading">

                                    <a href="#">Peter</a>

                                    <label class="label bg-primary m-l-xs">Vip</label>

                                    <span class="text-muted m-l-sm pull-right">

                            <i class="fa fa-clock-o"></i>

                            2hs ago

                          </span>

                                </header>

                                <div class="panel-body">

                                    <blockquote>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                            a ante.</p>

                                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>

                                    </blockquote>

                                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>

                                    <div class="comment-action m-t-sm">

                                        <a href="#" data-toggle="class" class="btn btn-default btn-xs">

                                            <i class="fa fa-star-o text-muted text"></i>

                                            <i class="fa fa-star text-danger text-active"></i>

                                            Like

                                        </a>

                                        <a href="#comment-form" class="btn btn-default btn-xs"><i
                                                    class="fa fa-mail-reply text-muted"></i> Reply</a>

                                    </div>

                                </div>

                            </section>

                        </article>
                        <article id="comment-id-4" class="comment-item">

                            <a class="pull-left thumb-sm avatar"><img src="/tan-admin/images/a5.png" alt="..."></a>

                            <span class="arrow left"></span>

                            <section class="comment-body panel panel-default">

                                <header class="panel-heading">

                                    <a href="#">Peter</a>

                                    <label class="label bg-primary m-l-xs">Vip</label>

                                    <span class="text-muted m-l-sm pull-right">

                            <i class="fa fa-clock-o"></i>

                            2hs ago

                          </span>

                                </header>

                                <div class="panel-body">

                                    <blockquote>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                            a ante.</p>

                                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>

                                    </blockquote>

                                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>

                                    <div class="comment-action m-t-sm">

                                        <a href="#" data-toggle="class" class="btn btn-default btn-xs">

                                            <i class="fa fa-star-o text-muted text"></i>

                                            <i class="fa fa-star text-danger text-active"></i>

                                            Like

                                        </a>

                                        <a href="#comment-form" class="btn btn-default btn-xs"><i
                                                    class="fa fa-mail-reply text-muted"></i> Reply</a>

                                    </div>

                                </div>

                            </section>

                        </article>
                        <article id="comment-id-4" class="comment-item">

                            <a class="pull-left thumb-sm avatar"><img src="/tan-admin/images/a5.png" alt="..."></a>

                            <span class="arrow left"></span>

                            <section class="comment-body panel panel-default">

                                <header class="panel-heading">

                                    <a href="#">Peter</a>

                                    <label class="label bg-primary m-l-xs">Vip</label>

                                    <span class="text-muted m-l-sm pull-right">

                            <i class="fa fa-clock-o"></i>

                            2hs ago

                          </span>

                                </header>

                                <div class="panel-body">

                                    <blockquote>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                            a ante.</p>

                                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>

                                    </blockquote>

                                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>

                                    <div class="comment-action m-t-sm">

                                        <a href="#" data-toggle="class" class="btn btn-default btn-xs">

                                            <i class="fa fa-star-o text-muted text"></i>

                                            <i class="fa fa-star text-danger text-active"></i>

                                            Like

                                        </a>

                                        <a href="#comment-form" class="btn btn-default btn-xs"><i
                                                    class="fa fa-mail-reply text-muted"></i> Reply</a>

                                    </div>

                                </div>

                            </section>

                        </article>
                        <article class="comment-item media" id="comment-form">
                            <section class="media-body">
                                <a href="#" class="btn btn-primary btn-block"><i class="fa fa-arrow-down"></i> 显示更多</a>
                            </section>
                        </article>
                    </section>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-profile-ctrl"></script>
@endsection