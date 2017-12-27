@extends('tan-admin.layout')

@section('tan-main')
    <section class="vbox">

        <section class="scrollable wrapper-lg">

            <div class="row">

                <div class="col-sm-9">

                    <div class="blog-post">

                        <div class="post-item">

                            <div class="post-media">

                                <img src="/tan-admin/images/m42.jpg" class="img-full">

                            </div>

                            <div class="caption wrapper-lg">

                                <h2 class="post-title"><a href="#">7 things you need to know about the flat design</a></h2>

                                <div class="post-sum">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat.

                                        <br><br>

                                        Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>

                                </div>

                                <div class="line line-lg"></div>

                                <div class="text-muted">

                                    <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a>

                                    <i class="fa fa-clock-o icon-muted"></i> Feb 20, 2013

                                    <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 2 comments</a>

                                </div>

                            </div>

                        </div>

                        <div class="post-item">

                            <div class="caption wrapper-lg">

                                <h2 class="post-title"><a href="#">Bootstrap 3: What you need to know</a></h2>

                                <div class="post-sum">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat.

                                    </p>

                                    <h3>Html5 and CSS3</h3>

                                    <p>

                                        Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>

                                </div>

                                <div class="line line-lg"></div>

                                <div class="text-muted">

                                    <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a>

                                    <i class="fa fa-clock-o icon-muted"></i> Feb 15, 2013

                                    <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 4 comments</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="text-center m-t-lg m-b-lg">

                        <ul class="pagination pagination-md">

                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>

                            <li class="active"><a href="#">1</a></li>

                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>

                            <li><a href="#">4</a></li>

                            <li><a href="#">5</a></li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>

                        </ul>

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

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>

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

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>

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

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>

                                </blockquote>

                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>

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

                                <label >Email</label>

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

                <div class="col-sm-3">

                    <h5 class="font-bold">Categories</h5>

                    <ul class="list-group">

                        <li class="list-group-item">

                            <a href="#">

                                <span class="badge pull-right">15</span>

                                Photograph

                            </a>

                        </li>

                        <li class="list-group-item">

                            <a href="#">

                                <span class="badge pull-right">30</span>

                                Life style

                            </a>

                        </li>

                        <li class="list-group-item">

                            <a href="#">

                                <span class="badge pull-right">9</span>

                                Food

                            </a>

                        </li>

                        <li class="list-group-item">

                            <a href="#">

                                <span class="badge pull-right">4</span>

                                Travel world

                            </a>

                        </li>

                    </ul>

                    <div class="tags m-b-lg l-h-2x">

                        <a href="#" class="label bg-primary">Bootstrap</a> <a href="#" class="label bg-primary">Application</a> <a href="#" class="label bg-primary">Apple</a> <a href="#" class="label bg-primary">Less</a> <a href="#" class="label bg-primary">Theme</a> <a href="#" class="label bg-primary">Wordpress</a>

                    </div>

                    <h5 class="font-bold">Recent Posts</h5>

                    <div>

                        <article class="media">

                            <a class="pull-left thumb thumb-wrapper m-t-xs">

                                <img src="/tan-admin/images/m1.jpg">

                            </a>

                            <div class="media-body">

                                <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>

                                <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>

                            </div>

                        </article>

                        <div class="line"></div>

                        <article class="media m-t-none">

                            <a class="pull-left thumb thumb-wrapper m-t-xs">

                                <img src="/tan-admin/images/m2.jpg">

                            </a>

                            <div class="media-body">

                                <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>

                                <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>

                            </div>

                        </article>

                        <div class="line"></div>

                        <article class="media m-t-none">

                            <a class="pull-left thumb thumb-wrapper m-t-xs">

                                <img src="/tan-admin/images/m3.jpg">

                            </a>

                            <div class="media-body">

                                <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>

                                <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>

                            </div>

                        </article>

                    </div>

                </div>

            </div>

        </section>

    </section>
@endsection

@section('tan-js')
    {{--<script src="/tan-admin/js/charts/sparkline/jquery.sparkline.min.js"></script>--}}
@endsection