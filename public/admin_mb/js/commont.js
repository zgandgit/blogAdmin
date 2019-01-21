//解析序列化表单对象
function strToObj(str){
    str = str.replace(/&/g,"','");
    str = str.replace(/=/g,"':'");
    str = "({'"+str +"'})";
    obj = eval(str);
    return obj;
}


