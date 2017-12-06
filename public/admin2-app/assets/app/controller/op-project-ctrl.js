require.config({
    baseUrl: '/admin2-app/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'sweetalert': 'vendor/sweetalert',
    }
});

require(['jquery', 'sweetalert'], function ($, sweetalert) {
    $(".oper-up-task-progress").click(function () {
        swal({
            title: "",
            text: '<div class="btn-group" data-toggle="buttons">'+
            '<label class="btn btn-sm btn-info active">'+
                '<input type="radio" name="options"><i class="fa fa-check text-active"></i> Male'+
                '</label>'+
                '<label class="btn btn-sm btn-success">'+
                '<input type="radio" name="options"><i class="fa fa-check text-active"></i> Female'+
                '</label>'+
                '<label class="btn btn-sm btn-primary">'+
                '<input type="radio" name="options"><i class="fa fa-check text-active"></i> N/A'+
                '</label>'+
            '</div>',
            html: true
        });
    });

});