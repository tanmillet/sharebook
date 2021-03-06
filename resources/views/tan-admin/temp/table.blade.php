@extends('tan-admin.layout')

@section('tan-main')
    <section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md">
                <h3 class="m-b-none">Static Table</h3>
            </div>
            <section class="panel panel-default">
                <header class="panel-heading">
                    Responsive Table
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control input-s-sm inline v-middle">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Bulk edit</option>
                            <option value="3">Export</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options"> Day
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options"> Week
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options"> Month
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="input-group">

                            <input type="text" class="input-sm form-control" placeholder="Search">

                            <span class="input-group-btn">

                        <button class="btn btn-sm btn-default" type="button">Go!</button>

                      </span>

                        </div>

                    </div>

                </div>

                <div class="table-responsive">

                    <table class="table table-striped b-t b-light">

                        <thead>

                        <tr>

                            <th style="width:20px;"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>

                            <th class="th-sortable" data-toggle="class">Project

                                <span class="th-sort">

                            <i class="fa fa-sort-down text"></i>

                            <i class="fa fa-sort-up text-active"></i>

                            <i class="fa fa-sort"></i>

                          </span>

                            </th>

                            <th>Task</th>

                            <th>Date</th>

                            <th style="width:30px;"></th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Idrawfast</td>

                            <td>4c</td>

                            <td>Jul 25, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Formasa</td>

                            <td>8c</td>

                            <td>Jul 22, 2013</td>

                            <td>

                                <a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Avatar system</td>

                            <td>15c</td>

                            <td>Jul 15, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Throwdown</td>

                            <td>4c</td>

                            <td>Jul 11, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Idrawfast</td>

                            <td>4c</td>

                            <td>Jul 7, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Formasa</td>

                            <td>8c</td>

                            <td>Jul 3, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Avatar system</td>

                            <td>15c</td>

                            <td>Jul 2, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        <tr>

                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>

                            <td>Videodown</td>

                            <td>4c</td>

                            <td>Jul 1, 2013</td>

                            <td>

                                <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

                <footer class="panel-footer">

                    <div class="row">

                        <div class="col-sm-4 hidden-xs">

                            <select class="input-sm form-control input-s-sm inline v-middle">

                                <option value="0">Bulk action</option>

                                <option value="1">Delete selected</option>

                                <option value="2">Bulk edit</option>

                                <option value="3">Export</option>

                            </select>

                            <button class="btn btn-sm btn-default">Apply</button>

                        </div>

                        <div class="col-sm-4 text-center">

                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>

                        </div>

                        <div class="col-sm-4 text-right text-center-xs">

                            <ul class="pagination pagination-sm m-t-none m-b-none">

                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>

                                <li><a href="#">1</a></li>

                                <li><a href="#">2</a></li>

                                <li><a href="#">3</a></li>

                                <li><a href="#">4</a></li>

                                <li><a href="#">5</a></li>

                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </footer>

            </section>

        </section>

    </section>
@endsection

@section('tan-js')
    {{--<script src="/tan-admin/js/charts/sparkline/jquery.sparkline.min.js"></script>--}}
@endsection