@extends('tan-admin.layout')

@section('tan-main')
    <section class="wrapper">
        <section class="scrollable">

        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-widget-ctrl"></script>
@endsection