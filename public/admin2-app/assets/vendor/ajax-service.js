define(['jquery'], function ($) {

    function AjaxModel() {
    }

    AjaxModel.prototype = {
        loseAjax: function (url, method, params, dataType, callback, btName) {
            $.ajax({
                url: url, type: method, data: params, dataType: dataType, success: callback,
                error: function () {
                    alert("网络异常!");
                    $("+btName+").removeAttr("disabled");
                }
            })
        },
    }

    return {
        AjaxModel: AjaxModel
    }

});