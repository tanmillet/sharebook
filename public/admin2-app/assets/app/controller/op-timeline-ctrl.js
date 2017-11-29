require.config({
    baseUrl: '/admin2-app/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'CURDModel': 'vendor/curd-model',
    }
});

require(['jquery', 'CURDModel'], function ($, curder) {
    $(".oper-del").click(function () {
        var me = this,
            formData = {
                'operId': $(me).attr('data-id'),
                'operName': $(me).attr('data-name')
            },
            formUrl = $(me).attr('data-url') + '/' + $(me).attr('data-id');
        $(me).attr('disabled', "true");

        var curd = new curder.CURDModel();
        curd.operD(formData, formUrl);
    });
});