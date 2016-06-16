/**
 * Created by Administrator on 2016-05-26.
 */
var host="http://"+window.location.host;
function noteclick(noteid) {
    $.ajax({
        type: 'get',
        url: host+"/index.php/Note/Index/click",
        data: {noteid:noteid},
        dataType: 'json',
        success:function (result) {
            console.log(result);
            if (result){
                console.log("Ok");
            }
        }
    });
}