require.config({
    baseUrl: '/admin2-app/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'AjaxModel': 'vendor/ajax-service',
    }
});

require(['jquery', "AjaxModel"], function ($, req) {
    $(".op-modal-danger").click(function () {
        $(me).attr('disabled', "true");

        var me = this,
            formData = {'operId': $("#operId").val()},
            formUrl = $(me).attr('data-url') + '/' + $("#operId").val();

        var request = new req.AjaxModel();
        request.loseAjax(formUrl, 'post', formData, 'json', function (res) {
            alert("执行结果信息。");
            $(me).removeAttr("disabled");
        }, 'op-modal-danger');

    });

    $(".op-modal-danger1").click(function () {
        var me = this,
            formId = me.id
        formData = $("#" + formId + "-form").serialize(),
            formUrl = $(me).attr('data-url') + '/1'
        $(me).attr('disabled', "true");

        var request = new req.AjaxModel();

        request.loseAjax(formUrl, 'post', formData, 'json', function (res) {
            alert("执行结果信息。");
            $(me).removeAttr("disabled");
        }, 'op-modal-danger1');
    });

});