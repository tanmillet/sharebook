require.config({
    baseUrl: '/tan-admin/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'CURDModel': 'vendor/curd-model',
    }
});

require(['jquery', 'CURDModel'], function ($, curder) {
    $(".oper-del").click(function () {
        var me = this,
            operId = $(me).attr('data-id'),
            operName = $(me).attr('data-name'),
            operUrl = $(me).attr('data-url') + '/' + operId,
            operData = {
                'operId': operId,
                'operName': operName
            };
        $(me).attr('disabled', "true");

        var curd = new curder.CURDModel();
        curd.operD(operData, operUrl,"确定要删除?");
        $(me).removeAttr("disabled");
    });

});