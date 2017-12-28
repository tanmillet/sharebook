@extends('tan-admin.layout')

@section('tan-main')
    <section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md">
                <h3 class="m-b-none">Validation</h3>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <form class="form-horizontal" data-validate="parsley">

                    <section class="panel panel-default">

                        <header class="panel-heading">

                            <strong>Type constraints</strong>

                        </header>

                        <div class="panel-body">

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">

                                    <input type="text" class="form-control" data-type="email" data-required="true"
                                           placeholder="email">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Url</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="url" class="form-control" placeholder="url">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Url strict</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="urlstrict" class="form-control"
                                           placeholder="urlstrict">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Digits</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="digits" class="form-control" placeholder="digits">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Number</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="number" class="form-control" placeholder="number">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Alphanum</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="alphanum" class="form-control"
                                           placeholder="alphanumeric string">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Date Iso</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="dateIso" class="form-control"
                                           placeholder="YYYY-MM-DD">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">

                                    <input type="text" data-type="phone" class="form-control"
                                           placeholder="(XXX) XXXX XXX">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Min Words</label>

                                <div class="col-sm-10">

                                    <input type="text" data-minwords="6" class="form-control" placeholder="min 6 words">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Max Words</label>

                                <div class="col-sm-10">

                                    <input type="text" data-maxwords="6" class="form-control" placeholder="max 6 words">

                                </div>

                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Range Words</label>

                                <div class="col-sm-10">

                                    <input type="text" data-rangewords="[6,10]" class="form-control"
                                           placeholder="min 6 words & max 10 words">

                                </div>

                            </div>

                        </div>

                        <footer class="panel-footer text-right bg-light lter">

                            <button type="submit" class="btn btn-success btn-s-xs">Submit</button>

                        </footer>

                    </section>

                </form>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/js/parsley/parsley.min.js"></script>
    <script src="/tan-admin/js/parsley/parsley.extend.js"></script>
@endsection