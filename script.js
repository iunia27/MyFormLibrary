/**
 * Created by iunia on 05/02/2017.
 */

$(document).ready(function(){
    $("button[name='submit']").click(function(){
        var firstname = $("input[name='firstname']").val();
        var lastname = $("input[name='lastname']").val();
        var gender = $("input[name='gender']:checked").val();
        var description = $("textarea[name='description']").val();

        if (!(firstname && lastname && gender && description)){
            //a little JS validation
            alert('All fields are required!');
        }
        else
        {
            //submit form data
            $.ajax({
                type: "POST",
                url: "afterSubmit.php",
                data: $("form[name='myform']").serialize(),
                //this way we avoid XXS

                success: function(result){
                    alert(result);
                },
                fail : function(){
                   alert( "Something went wrong, please try again!");
                }
            });
        }
        return false;
    });
});
