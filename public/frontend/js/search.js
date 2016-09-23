$(document).ready(
    function(){
        $('#add_more_ingredient').click(
            function(){
                var html = '<div class="f-row" id="ingredients">'+
                    '<input type="text" name="ingredient[]" placeholder="Add ingredients (one at a time)" />'+
                    '<button class="remove" id="">-</button>'+
                    '</div>';



                $('#ingredients').append(html);


            }
        );

        $('body').on('click','.remove',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                //$(this).parent().prevAll('.ingredient-unit:first').remove();
                //$(this).parent().prevAll('.ingredient-amount:first').remove();
                //$(this).parent().prevAll('.ingredient-name:first').remove();
                $(this).parent().remove();

            }
        );
    }
)