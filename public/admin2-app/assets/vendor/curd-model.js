/**
 * Created by hp on 17.11.29.
 */
require.config({
    baseUrl: '/admin2-app/assets/',
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
        operC: function () {

        },
        operU: function () {

        },
        operR: function () {

        },
        operD: function (operData, operUrl) {
            var request = new req.AjaxModel();
            swal({
                    title: "确定要删除?",
                    text: operData.operName,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "确定",
                    cancelButtonText: "取消",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showLoaderOnConfirm: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        request.loseAjax(operUrl, 'post', operData, 'json', function (res) {
                            swal({
                                    title: "",
                                    text: res.info.message,
                                    type: "success",
                                    confirmButtonText: "确定",
                                },
                                function () {
                                    window.location.reload();
                                });
                        }, 'oper-del');
                    } else {
                        window.location.reload();
                    }
                });
        }
    };

    return {
        CURDModel: CURDModel
    }
});
