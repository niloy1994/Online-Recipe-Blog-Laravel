
$(document).ready(
    function(){
        $('#btn_submit').click(
            function(){
                var name=$('#name').val();
                if(name==""){
                    $('#name').css('background-color','red');
                    return false;
                }

            }
        );
    }
);

