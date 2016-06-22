/**
 * Created by Administrator on 2016-06-22.
 */
$(function () {

});
function rep(id,username) {
    $('#comment_id').val(id);
    $('#tousername').val(username);
    $('#comments').attr('placeholder','To:'+username);
    $('#comments').focus();
    
}