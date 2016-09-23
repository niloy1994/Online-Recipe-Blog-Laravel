$(document).ready(
    function(){
        $('#btn_submit1').click(
            function(){
                var name=$('#name').val();
                var email=$('#email').val();
                var password=$('#password').val();
                var confirm_password=$('#confirm_password').val();
                var status=$('#status').val();

                if(name==""){
                    $('#name').css('background-color','red');
                    return false;
                }
                if(email==""){
                    $('#email').css('background-color','red');
                    return false;
                }
                if(password==""){
                    $('#password').css('background-color','red');
                    return false;
                }
                if(confirm_password==""){
                    $('#confirm_password').css('background-color','red');
                    return false;
                }
                if(password!=confirm_password){
                    $('#password').css('background-color','red');
                    $('#confirm_password').css('background-color','red');
                    return false;
                }
                if(status==""){
                    $('#status').css('background-color','red');
                    return false;
                }

            }
        );
    }
);
