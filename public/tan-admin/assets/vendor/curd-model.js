/**
 * Created by hp on 17.11.29.
 */
require.config({
    baseUrl: '/tan-admin/assets/',
    paths: {
        'jquery': 'vendor/jquery.min',
        'AjaxModel': 'vendor/ajax-service',
        'sweetalert': 'vendor/sweetalert',
    }
});

define(['jquery', 'AjaxModel', 'sweetalert'], function ($, req, sweetalert) {

    function CURDModel() {
    }

    CURDModel.prototype = {
        operCityCode: function (operData, operUrl, operCode, operNextCode) {
            var request = new req.AjaxModel();
            var htmlSelectStart = '<select class="form-control oper_code" data-next-code="' + operNextCode + '" data-code="' + operNextCode + '" name="' + operCode + '">', htmlOption = '', htmlSelectEnd = '</select>';
            var htmlOp = "<option value=''>选择市区街道</option>";
            $('.street_code').html('')
            request.loseAjax(operUrl + operData, 'get', [], 'json', function (res) {
                if (res.status == 'succeed') {
                    $(res.info.data).each(function (index, val) {
                        htmlOption += "<option value=" + val.node_code + ">" + val.node_name + "</option>"
                    });
                    if (htmlOption != '') {
                        $('.' + operCode).html(htmlSelectStart + htmlOp + htmlOption + htmlSelectEnd)
                    } else {
                        $('.' + operCode).html('')
                    }
                }
            });

        },
        operC: function (operData, operUrl) {
            var request = new req.AjaxModel();
            request.loseAjax(operUrl, 'post', operData, 'json', function (res) {
                swal("结果信息！", res.info.message, "success")
                return 'success';
            });

            return 'error';
        },
        operU: function () {
        },
        operR: function () {

        },
        operD: function (operData, operUrl, tipMsg) {
            var request = new req.AjaxModel();
            swal({
                    title: tipMsg,
                    text: operData.operName,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "确定",
                    cancelButtonText: "取消",
                    closeOnConfirm: false,
                    closeOnCancel: true,
                    showLoaderOnConfirm: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        request.loseAjax(operUrl, 'post', operData, 'json', function (res) {
                            swal({
                                    title: "结果信息！",
                                    text: res.info.message,
                                    type: "success",
                                    confirmButtonText: "确定",
                                },
                                function () {
                                    window.location.reload();
                                });
                        });
                    } else {
                        // window.location.reload();
                    }
                });
        }
    };

    return {
        CURDModel: CURDModel
    }
});
