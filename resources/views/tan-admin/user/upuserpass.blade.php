@extends('tan-admin.layout')

@section('tan-main')
    <section>
            <P>this is test</P>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-user-ctrl"></script>
@endsection