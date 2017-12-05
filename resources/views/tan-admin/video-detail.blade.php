@extends('tan-admin.layout')

@section('tan-main')

    <section class="vbox">

        <section class="scrollable wrapper-lg">

            <div class="row">

                <div class="col-sm-8">

                    <div class="panel">

                        <!-- video player -->

                        <div id="jp_container_1">

                            <div class="jp-type-single pos-rlt">

                                <div id="jplayer_1" class="jp-jplayer jp-video"></div>

                                <div class="jp-gui">

                                    <div class="jp-video-play">

                                        <a class="fa fa-5x text-white fa-play-circle"></a>

                                    </div>

                                    <div class="jp-interface bg-info padder">

                                        <div class="jp-controls">

                                            <div>

                                                <a class="jp-play"><i class="icon-control-play i-2x"></i></a>

                                                <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>

                                            </div>

                                            <div class="jp-progress">

                                                <div class="jp-seek-bar dker">

                                                    <div class="jp-play-bar dk">

                                                    </div>

                                                    <div class="jp-title text-lt">

                                                        <ul>

                                                            <li></li>

                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>

                                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>

                                            <div class="hidden-xs hidden-sm">

                                                <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>

                                                <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>

                                            </div>

                                            <div class="hidden-xs hidden-sm jp-volume">

                                                <div class="jp-volume-bar dk">

                                                    <div class="jp-volume-bar-value lter"></div>

                                                </div>

                                            </div>

                                            <div>

                                                <a class="jp-full-screen" title="full screen"><i
                                                            class="fa fa-expand"></i></a>

                                                <a class="jp-restore-screen" title="restore screen"><i
                                                            class="fa fa-compress text-lt"></i></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="jp-no-solution hide">

                                    <span>Update Required</span>

                                    To play the media you will need to either update your browser to a recent version or
                                    update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash
                                        plugin</a>.

                                </div>

                            </div>

                        </div>

                        <!-- / video player -->

                        <div class="wrapper-lg">

                            <h2 class="m-t-none text-black">Big Buck Bunny Trailer</h2>

                            <div class="post-sum">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam
                                    sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec
                                    condimentum. Mauris convallis mauris at pellentesque volutpat.

                                    <br><br>

                                    Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl
                                    eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu
                                    malesuada sem, dapibus porta quam lacus eu neque.</p>

                            </div>

                            <div class="line b-b"></div>

                            <div class="text-muted">

                                <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a>

                                <i class="fa fa-clock-o icon-muted"></i> Feb 20, 2013

                                <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 3 comments</a>

                            </div>

                        </div>

                    </div>

                    <h4 class="m-t-lg m-b">3 Comments</h4>

                    <section class="comment-list block">

                        <article id="comment-id-1" class="comment-item">

                            <a class="pull-left thumb-sm">

                                <img src="/tan-admin/images/a0.png" class="img-circle">

                            </a>

                            <section class="comment-body m-b">

                                <header>

                                    <a href="#"><strong>John smith</strong></a>

                                    <label class="label bg-info m-l-xs">Editor</label>

                                    <span class="text-muted text-xs block m-t-xs">

                            24 minutes ago

                          </span>

                                </header>

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id
                                    neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.
                                </div>

                            </section>

                        </article>

                        <!-- .comment-reply -->

                        <article id="comment-id-2" class="comment-item comment-reply">

                            <a class="pull-left thumb-sm">

                                <img src="/tan-admin/images/a1.png" class="img-circle">

                            </a>

                            <section class="comment-body m-b">

                                <header>

                                    <a href="#"><strong>John smith</strong></a>

                                    <label class="label bg-dark m-l-xs">Admin</label>

                                    <span class="text-muted text-xs block m-t-xs">

                            26 minutes ago

                          </span>

                                </header>

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet.
                                </div>

                            </section>

                        </article>

                        <!-- / .comment-reply -->

                        <article id="comment-id-2" class="comment-item">

                            <a class="pull-left thumb-sm">

                                <img src="/tan-admin/images/a2.png" class="img-circle">

                            </a>

                            <section class="comment-body m-b">

                                <header>

                                    <a href="#"><strong>John smith</strong></a>

                                    <label class="label bg-dark m-l-xs">Admin</label>

                                    <span class="text-muted text-xs block m-t-xs">

                            26 minutes ago

                          </span>

                                </header>

                                <blockquote class="m-t">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>

                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>

                                </blockquote>

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet.
                                </div>

                            </section>

                        </article>

                    </section>

                    <h4 class="m-t-lg m-b">Leave a comment</h4>

                    <form>

                        <div class="form-group pull-in clearfix">

                            <div class="col-sm-6">

                                <label>Your name</label>

                                <input type="text" class="form-control" placeholder="Name">

                            </div>

                            <div class="col-sm-6">

                                <label>Email</label>

                                <input type="email" class="form-control" placeholder="Enter email">

                            </div>

                        </div>

                        <div class="form-group">

                            <label>Comment</label>

                            <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-success">Submit comment</button>

                        </div>

                    </form>

                </div>

                <div class="col-sm-4">

                    <div class="panel panel-default">

                        <div class="panel-heading">Suggestions</div>

                        <div class="panel-body">

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m40.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>

                                    <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>

                                </div>

                            </article>

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m41.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Lorem ipsum dolor sit amet it.</a>

                                    <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>

                                </div>

                            </article>

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m42.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Sed diam nonummy tincidunt ut laoreet</a>

                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>

                                </div>

                            </article>

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m43.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Lonummy nibh euismod sed laoreet</a>

                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>

                                </div>

                            </article>

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m44.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Mibh euismod tincidunt ut laoreet</a>

                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>

                                </div>

                            </article>

                            <article class="media">

                                <a href="#" class="pull-left thumb-lg m-t-xs">

                                    <img src="/tan-admin/images/m45.jpg">

                                </a>

                                <div class="media-body">

                                    <a href="#" class="font-semibold">Siam nonummy nibh oreet</a>

                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>

                                </div>

                            </article>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </section>

@endsection