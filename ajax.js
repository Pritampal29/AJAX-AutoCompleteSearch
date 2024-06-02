$(document).ready(function(){
    $("#searchId").keyup(function(){;
        var input = $("#searchId").val();

        if(input !='') {
            $.ajax({
                url: 'search.php',
                type: 'post',
                data: {
                    input:input
                },
                success: function(response){
                    $("#name-list").fadeIn(1000);
                    $("#name-list").html(response);
                }
            });
        }
    });
    $(document).on("click","li",function(){
        $("#searchId").val($(this).text());
        $("#name-list").fadeOut(1000);
    });
});