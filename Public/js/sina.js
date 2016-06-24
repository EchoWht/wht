/**
 * Created by Administrator on 2016-06-24.
 */
$("#step_one").click(
    function () {
        $("#email").fadeIn();
        $("#step_one").hide();
        $("#step_two").show();
    }
)
$("#step_two").click(
    function () {
        $("#passwd").fadeIn();
        $("#step_two").hide();
        $("#step_three").show();
    }
)