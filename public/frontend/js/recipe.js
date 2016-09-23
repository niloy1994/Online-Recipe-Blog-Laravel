$(document).ready(
    function(){
        $('#btn_submit').click(
            function(){
                var name=$('#name').val();
                var category=$('#category').val();
                var description=$('#description').val();
                var preparation_time=$('#preparation_time').val();
                var cooking_time=$('#cooking_time').val();
                var difficulty=$('#difficulty').val();
                var serves=$('#serves').val();
                var ingredient_name=$('#ingredient_name').val();
                var ingredient_amount=$('#amount').val();
                var ingredient_unit=$('#unit').val();
                var process=$('#process').val();
                var video=$('#video').val();

                if(name==""){
                    $('#name').css('background-color','red');
                    return false;
                }
                if(category==""){
                    $('#category').css('background-color','red');
                    return false;
                }
                if(description==""){
                    $('#description').css('background-color','red');
                    return false;
                }

                if(preparation_time==""){
                    $('#preparation_time').css('background-color','red');
                    return false;
                }
                if(category_time==""){
                    $('#cooking_time').css('background-color','red');
                    return false;
                }
                if(difficulty==""){
                    $('#difficulty').css('background-color','red');
                    return false;
                }
                if(serves==""){
                    $('#serves').css('background-color','red');
                    return false;
                }
                if(ingredient_name==""){
                    $('#ingredient_name').css('background-color','red');
                    return false;
                }
                if(ingredient_amount==""){
                    $('#amount').css('background-color','red');
                    return false;
                }
                if(ingredient_unit==""){
                    $('#unit').css('background-color','red');
                    return false;
                }
                if(process==""){
                    $('#process').css('background-color','red');
                    return false;
                }
                if(video==""){
                    $('#video').css('background-color','red');
                    return false;
                }


            }
        );

        $('#add_more_ingredient').click(
            function(){
                var html = '<div class="f-row ingredient" id="ingredients">'+
                    '<div class="large"><input type="text" name="ingredient_name[]" id="ingredient-name" placeholder="Ingredient" /></div>'+
                    '<div class="small"><input type="text" name="ingredient_amount[]" id="amount" placeholder="Amount" /></div>'+
                    '<div class="small"><input type="text" name="ingredient_unit[]" id="unit" placeholder="Unit" /></div>'+


                    '<button class="remove" type="button" id="delete-ingredient">-</button>'+
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

        $('#add_more_process').click(
            function(){
                var html = '<div class="f-row instruction" id="processes">'+
                    '<div class="full"><input type="text" name="process[]" id="process" placeholder="Instructions" /></div>'+
                '<button class="remove" type="button" id="delete-process">-</button>'+
                '</div>';



                $('#processes').append(html);


            }
        );

        /*$('body').on('click','.delete-process',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                $(this).parent().prevAll('.process:first').remove();
                $(this).parent().remove();

            }
        );*/

        $('#add_more_nutrition').click(
            function(){
                var html = '<div class="f-row ingredient" id="nutrition" >'+
                    '<div class="large"><input type="text" name="nutrition_name[]" id="nutrition-name" placeholder="Nutrition" /></div>'+
                    '<div class="small"><input type="text" name="nutrition_amount[]" id="amount" placeholder="Amount" /></div>'+
                    '<div class="small"><input type="text" name="nutrition_unit[]" id="unit" placeholder="Unit" /></div>'+


                    '<button class="remove" type="button" id="delete-nutrition">-</button>'+
                '</div>';



                $('#nutrition').append(html);


            }
        );

       /* $('body').on('click','.delete-nutrition',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                $(this).parent().prevAll('.nutrition-unit:first').remove();
                $(this).parent().prevAll('.nutrition-amount:first').remove();
                $(this).parent().prevAll('.nutrition-name:first').remove();
                $(this).parent().remove();

            }
        );*/
    }
);

