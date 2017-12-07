require.config({
    baseUrl: '/admin2-app/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'sweetalert': 'vendor/sweetalert',
        'CURDModel': 'vendor/curd-model',
    }
});

require(['jquery', 'sweetalert', 'CURDModel'], function ($, sweetalert, curder) {
    $(".oper-up-task-progress").click(function () {
        swal({
            title: "",
            text: '<div class="btn-group" data-toggle="buttons">' +
            '<label class="btn btn-sm btn-info active">' +
            '<input type="radio" name="options"><i class="fa fa-check text-active"></i> Male' +
            '</label>' +
            '<label class="btn btn-sm btn-success">' +
            '<input type="radio" name="options"><i class="fa fa-check text-active"></i> Female' +
            '</label>' +
            '<label class="btn btn-sm btn-primary">' +
            '<input type="radio" name="options"><i class="fa fa-check text-active"></i> N/A' +
            '</label>' +
            '</div>',
            html: true
        });
    });

    $(".oper-upshow").click(function () {
        var me = this;
        $(me).attr('disabled', "true");
        var post_data = $("#upshowproject").serialize();
        post_data = post_data + "&context=" + $('#editor').html();
        var post_url = '/pro/store/project';
        var curd = new curder.CURDModel();
        var res = curd.operC(post_data, post_url);
        $(me).removeAttr("disabled");
        if(res == "success"){
            window.location.reload();
        }
        console.log(res);
    });

});