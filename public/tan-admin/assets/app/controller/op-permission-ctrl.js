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
        curd.operD(operData, operUrl, "确定删除吗？");
        $(me).removeAttr("disabled");
    });

    $(".oper-dispatch").click(function () {
        var me = this,
            operId = $(me).attr('data-id'),
            roleId = $(me).attr('data-role-id'),
            operName = $(me).attr('data-name'),
            operUrl = $(me).attr('data-url') + '/' + roleId + '/' + operId,
            operData = {
                'operId': operId,
                'roleId': roleId,
                'operName': operName
            };
        $(me).attr('disabled', "true");

        var curd = new curder.CURDModel();
        curd.operD(operData, operUrl, '确定要指派权限给该角色吗？');
        $(me).removeAttr("disabled");
    });

    $(".oper-dispatch-all").click(function () {
        var me = this,
            operId = $(me).attr('data-id'),
            roleId = $(me).attr('data-role-id'),
            operName = $(me).attr('data-name'),
            operUrl = $(me).attr('data-url') + '/' + roleId + '/' + operId,
            operData = {
                'operId': operId,
                'roleId': roleId,
                'operName': operName
            };
        $(me).attr('disabled', "true");

        var curd = new curder.CURDModel();
        curd.operD(operData, operUrl, '确定要指派权限给该角色吗？');
        $(me).removeAttr("disabled");
    });

});