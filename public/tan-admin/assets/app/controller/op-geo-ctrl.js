require.config({
    baseUrl: '/tan-admin/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'AjaxModel': 'vendor/ajax-service',
    }
});

require(['jquery', "AjaxModel"], function ($, req) {
    $(".op-geo-danger").click(function () {
        var me = this,
            inputData = $("#address").val(),
            formUrl = "admin/geoanalyze"
        var request = new req.AjaxModel();
        request.loseAjax(formUrl, 'GET', {'address': inputData}, 'json', function (res) {
        }, 'op-geo-danger');
    });
});