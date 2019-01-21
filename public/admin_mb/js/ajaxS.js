const addWebSite = '/admin/Admin/addWebSite';//新增博客配置属性 地址
const updateWebSite = '/admin/Admin/updateWebSite';//修改属性
const removeWebSite = '/admin/Admin/removeWebSite';//删除属性
const updateFile = '/admin/Resource/updateFile';//上传资源
const removeFl = '/admin/Article/removeFl';//删除分类
const removeA = '/admin/Article/removeA';//删除文章
const removeCourse = '/admin/Article/removeCourse';//删除文档
function ajaxAddWebSite(data) {
    $.ajax({
        type:"post",
        url:addWebSite,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                alert(result.msg);window.location.reload();
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}
function ajaxUpdateWebSite(data) {
    $.ajax({
        type:"post",
        url:updateWebSite,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                alert(result.msg);
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}
function ajaxRemoveWebSite(data) {
    $.ajax({
        type:"post",
        url:removeWebSite,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                $('#del'+data.id).remove();
                alert(result.msg);
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}
function ajaxUpdateFile(data,fn) {
    $.ajax({
        type:"post",
        url:updateFile,
        dataType:"json",
        data:data,
        success:function(result){
            fn(result);
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}

function ajaxRemoveFl(data) {
    $.ajax({
        type:"post",
        url:removeFl,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                $('#del'+data.id).remove();
                alert(result.msg);
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}

function ajaxRemoveA(data) {
    $.ajax({
        type:"post",
        url:removeA,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                $('#del'+data.id).remove();
                alert(result.msg);
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}
function ajaxRemoveCourse(data) {
    $.ajax({
        type:"post",
        url:removeCourse,
        dataType:"json",
        data:data,
        success:function(result){
            if(result.code == 200){
                $('#del'+data.id).remove();
                alert(result.msg);
            }else{
                alert(result.msg);
            }
        },
        error:function(jqXHR){
            console.log("Error: "+jqXHR.status);
        }
    });
}
















