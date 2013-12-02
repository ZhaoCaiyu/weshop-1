/* ========================================================
 
 
 
 * ======================================================== */
/* --------------------------------------------------------
    -     通用部分
 * -------------------------------------------------------- */

//调用远程页面 //调用菜单通用

function changepage(pageurl, toele) {
    //alert(pageurl);
    $("#loading").fadeIn();
    $.ajax({
        type: "GET",
        url: pageurl,
        error: function(data) {
            $("#xhr-status").html('Error Status: ' + data.status + '<br>Remote Url: ' + pageurl);
        },
        success: function(data) {
            $("#loading").fadeOut();
            $("#xhr-status").html('');
            eval($("#" + toele).html(data));
        },
        complete: function() {}
    });
}


//通用删除

function publicDelete(url, obj) {
    $('#error').addClass("text-error");
    $('#requestinfo').addClass("btn-danger");
    $('#myModalLabel').html('系统警告：删除？');
    $('#error').html('确定删除【' + obj + '】？点确定执行删除，本操作无法恢复。');
    $('#myModal').modal();
    $('#requestinfo').on('click', function() {
        $("#loading").fadeIn();
        $.ajax({
            type: "GET",
            url: url,
            error: function(data) {
                $("#xhr-status").html('Error Status: ' + data.status + '<br>Remote Url: ' + pageurl);
            },
            success: function(data) {
                if (data.indexOf("成功") != -1) {
                    $("#loading").fadeOut();
                    $("#xhr-status").html('');
                    $('#' + obj).remove();
                }else{
                    $("#xhr-status").html(data);
                }

            },
            complete: function() {
                $('#myModal').on('hidden', function() {
                    //$("#loading").fadeOut();
                })
            }
        });
    })
}

//通用form保存

function publicSaveForm(url, obj) {
    var queryString = $('#' + obj).formSerialize();
    $('#' + obj).ajaxForm(function() //提交表单
        {
            var options = {
                target: '#error', //后台将把传递过来的值赋给该元素
                url: url, //提交给哪个执行
                data: queryString,
                type: 'POST',
                error: function(data) {
                    $("#xhr-status").html('Error Status: ' + data.status + '<br>Remote Url: ' + url);
                },
                beforeSubmit: function() {
                    $("#loading").fadeIn();
                },
                success: function(data) {
                    $("#loading").fadeOut();
                    if (data.indexOf("成功") != -1) {
                        $(this).addClass("text-success");
                        $('#requestinfo').addClass("btn-success");
                        $('#myModalLabel').html('系统提示：成功');
                    } else {
                        $(this).addClass("text-warning");
                        $('#requestinfo').addClass("btn-warning");
                        $('#myModalLabel').html('系统提示：失败');
                    }
                },
                complete: function() {
                    $('#myModal').modal();
                }
            };
            $('#' + obj).ajaxSubmit(options);
            return false; //为了不刷新页面,返回false，反正都已经在后台执行完了，没事！
        });
}


/* --------------------------------------------------------
    -     群发管理部分
 * -------------------------------------------------------- */
function sender(obj,pwd,senderbox,toele){
    if(senderbox){
     info=$('#'+senderbox).val();
    }else{
     info='';
    };
    gp=$('#gp').val();
    if(gp == ''){
        gp=0;
    }
    changepage('./weixin/post.php?sender='+obj+'&pwd='+pwd+'&info='+info+'&gp='+gp,toele);
}

/* --------------------------------------------------------
    -     发送订单到配送员部分
 * -------------------------------------------------------- */
function sendermy(info,sender){
    if(sender){
    url='./order/poster.php?info='+info+'&sender='+sender;
    }else{
    url='./order/poster.php?info='+info;
    }
    show(url);
}

function show(url) {
   $("#loading").fadeIn();
    $.ajax({
        type: "GET",
        url: url,
        error: function(data) {
            $("#xhr-status").html('Error Status: ' + data.status + '<br>Remote Url: ' + pageurl);
        },
        success: function(data) {
            $("#loading").fadeOut();
            $("#xhr-status").html('');
            $('#myModalLabel').html('信息');
            eval($("#error").html(data));
        },
        complete: function() {
                $('#myModal').on('hidden', function() {
                    $("#error").html('');            
                })
            }
    });
}

















