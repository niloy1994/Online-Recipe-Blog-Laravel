/**
 * Created by user on 6/3/2016.
 */

$(document).ready(
    function(){
        $('#btn_submit').click(
            function(){
                var name=$('#name').val();
                var description=$('#description').val();
                var image=$('#image').val();

                if(name==""){
                    $('#name').css('background-color','red');
                    return false;
                }
                if(description==""){
                    $('#description').css('background-color','red');
                    return false;
                }
                if(image==""){
                    $('#image').css('background-color','red');
                    return false;
                }

            }
        );
    }
);

