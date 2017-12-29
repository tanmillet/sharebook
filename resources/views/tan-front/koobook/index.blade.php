@extends('tan-front.layout')

@section('tan-main')
    <section class="hbox stretch">
        <section class="vbox">
            <section class="scrollable padder-lg" id="bjax-target">
                <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i
                            class="icon-refresh i-lg  inline" id="refresh"></i></a>
                <h2 class="font-thin m-b">读书慧 <span class="musicbar animate inline m-l-sm"
                                                         style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                <div class="row row-sm">

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-success"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p1.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Tempered Song</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p2.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-success"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p1.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Tempered Song</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p2.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-success"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p1.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Tempered Song</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p2.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-success"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p1.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Tempered Song</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x active">
                                    <div class="text-info padder m-t-sm text-sm">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                        <i class="fa fa-star-o text-muted"></i>
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" class="pull-right active" data-toggle="class">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a href="#" data-toggle="class">
                                            <i class="fa fa-plus-circle text"></i>
                                            <i class="fa fa-check-circle text-active text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><img src="/tan-admin/images/p2.jpg" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                                <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                                <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p3.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Allen JH</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <div class="top">

                            <span class="pull-right m-t-n-xs m-r-sm text-white">

                              <i class="fa fa-bookmark i-lg"></i>

                            </span>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p4.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Tincidunt libero</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p5.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Fermentum diam</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Nisa Colen</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="top">

                                    <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>

                                </div>

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p6.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Habitant</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Dan Doorack</a>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <div class="top">

                                    <span class="pull-right m-t-sm m-r-sm badge bg-white">12</span>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p7.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Ligula H</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p8.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Aliquam sollicitudin venenati</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">James East</a>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p9.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Lementum ligula vitae</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay r r-2x bg-light dker active">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#" data-toggle="class" class="active">

                                            <i class="icon-control-play i-2x text"></i>

                                            <i class="icon-control-pause i-2x text-active"></i>

                                        </a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right" data-toggle="class">

                                            <i class="fa fa-heart-o text"></i>

                                            <i class="fa fa-heart text-active text-danger"></i>

                                        </a>

                                        <a href="#" class="active" data-toggle="class">

                                            <i class="fa fa-plus-circle text"></i>

                                            <i class="fa fa-check-circle text-active text-info"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p10.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Egestas dui nec fermentum </a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Chris Fox</a>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p11.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">Jack Jason</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">

                        <div class="item">

                            <div class="pos-rlt">

                                <div class="item-overlay opacity r r-2x bg-black">

                                    <div class="text-info padder m-t-sm text-sm">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-o text-muted"></i>

                                    </div>

                                    <div class="center text-center m-t-n">

                                        <a href="#"><i class="icon-control-play i-2x"></i></a>

                                    </div>

                                    <div class="bottom padder m-b-sm">

                                        <a href="#" class="pull-right">

                                            <i class="fa fa-heart-o"></i>

                                        </a>

                                        <a href="#">

                                            <i class="fa fa-plus-circle"></i>

                                        </a>

                                    </div>

                                </div>

                                <a href="#"><img src="/tan-admin/images/p12.jpg" alt="" class="r r-2x img-full"></a>

                            </div>

                            <div class="padder-v">

                                <a href="#" class="text-ellipsis">Vestibulum ullamcorper</a>

                                <a href="#" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-7">

                        <h3 class="font-thin">New Songs</h3>

                        <div class="row row-sm">

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a2.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Spring rain</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a3.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Hope</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Miya</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a8.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Listen wind</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Soyia Jess</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a9.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Breaking me</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Pett JA</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a1.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Nothing</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Willion</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a6.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Panda Style</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Lionie</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x bg-black">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a7.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Hook Me</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Gossi</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-3">

                                <div class="item">

                                    <div class="pos-rlt">

                                        <div class="item-overlay opacity r r-2x active">

                                            <div class="center text-center m-t-n">

                                                <a href="#"><i class="fa fa-play-circle i-2x"></i></a>

                                            </div>

                                        </div>

                                        <a href="#"><img src="/tan-admin/images/a5.png" alt="" class="r r-2x img-full"></a>

                                    </div>

                                    <div class="padder-v">

                                        <a href="#" class="text-ellipsis">Tempered Song</a>

                                        <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-5">

                        <h3 class="font-thin">Top Songs</h3>

                        <div class="list-group bg-white list-group-lg no-bg auto">

                            <a href="#" class="list-group-item clearfix">

                                <span class="pull-right h2 text-muted m-l">1</span>

                                <span class="pull-left thumb-sm avatar m-r">

                            <img src="/tan-admin/images/a4.png" alt="...">

                          </span>

                                <span class="clear">

                            <span>Little Town</span>

                            <small class="text-muted clear text-ellipsis">by Chris Fox</small>

                          </span>

                            </a>

                            <a href="#" class="list-group-item clearfix">

                                <span class="pull-right h2 text-muted m-l">2</span>

                                <span class="pull-left thumb-sm avatar m-r">

                            <img src="/tan-admin/images/a5.png" alt="...">

                          </span>

                                <span class="clear">

                            <span>Lementum ligula vitae</span>

                            <small class="text-muted clear text-ellipsis">by Amanda Conlan</small>

                          </span>

                            </a>

                            <a href="#" class="list-group-item clearfix">

                                <span class="pull-right h2 text-muted m-l">3</span>

                                <span class="pull-left thumb-sm avatar m-r">

                            <img src="/tan-admin/images/a6.png" alt="...">

                          </span>

                                <span class="clear">

                            <span>Aliquam sollicitudin venenatis</span>

                            <small class="text-muted clear text-ellipsis">by Dan Doorack</small>

                          </span>

                            </a>

                            <a href="#" class="list-group-item clearfix">

                                <span class="pull-right h2 text-muted m-l">4</span>

                                <span class="pull-left thumb-sm avatar m-r">

                            <img src="/tan-admin/images/a7.png" alt="...">

                          </span>

                                <span class="clear">

                            <span>Aliquam sollicitudin venenatis ipsum</span>

                            <small class="text-muted clear text-ellipsis">by Lauren Taylor</small>

                          </span>

                            </a>

                            <a href="#" class="list-group-item clearfix">

                                <span class="pull-right h2 text-muted m-l">5</span>

                                <span class="pull-left thumb-sm avatar m-r">

                            <img src="/tan-admin/images/a8.png" alt="...">

                          </span>

                                <span class="clear">

                            <span>Vestibulum ullamcorper</span>

                            <small class="text-muted clear text-ellipsis">by Dan Doorack</small>

                          </span>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="row m-t-lg m-b-lg">

                    <div class="col-sm-6">

                        <div class="bg-primary wrapper-md r">

                            <a href="#">

                                <span class="h4 m-b-xs block"><i class=" icon-user-follow i-lg"></i> Login or Create account</span>

                                <span class="text-muted">Save and share your playlist with your friends when you log in or create an account.</span>

                            </a>

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="bg-black wrapper-md r">

                            <a href="#">

                                <span class="h4 m-b-xs block"><i class="icon-cloud-download i-lg"></i> Download our app</span>

                                <span class="text-muted">Get the apps for desktop and mobile to start listening music at anywhere and anytime.</span>

                            </a>

                        </div>

                    </div>

                </div>

            </section>
        </section>
    </section>
@endsection