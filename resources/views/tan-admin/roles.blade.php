@extends('tan-admin.layout')

@section('tan-main')

    <section class="vbox">

        <section class="scrollable padder">

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
                            <th style="width:20px;"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label>
                            </th>
                            <th class="th-sortable" data-toggle="class">user name
                                <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                            </th>
                            <th>user tag</th>
                            <th>updated_at</th>
                            <th style="width:240px;">operate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                                name="post[]"><i></i></label>
                                </td>
                                <td>
                                    <a href="/admin2/show/role/{{base64_encode($role->id)}}">{{$role->display_name}}</a>
                                </td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->updated_at}}</td>
                                <td>
                                    <div class="doc-buttons">
                                        <a href="/admin2/show/role/{{base64_encode($role->id)}}"
                                           class="btn  btn-sm btn-info">Edit</a>
                                        <a href="#" class="btn  btn-sm btn-danger oper-del"
                                           data-id="{{base64_encode($role->id)}}"
                                           data-name="{{$role->display_name}}" data-url="/admin2/destroy/role">Del</a>
                                        <a href="/admin2/dispatch/permission/{{base64_encode($role->id)}}"
                                           class="btn  btn-sm btn-dark">Dispatch</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            empty!
                        @endforelse
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
    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-role-ctrl"></script>
@endsection