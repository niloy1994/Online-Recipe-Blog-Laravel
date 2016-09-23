$(document).ready(
    function(){
      $('#submitRecipe').click(
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
               var html = '<div class="col-md-3 ingredient-name">'+
               '<label class="sr-only">Ingredient Name</label>'+
                '<input type="text" class="form-control" name="ingredient_name[]" id="ingredient_name" placeholder="Enter Name">'+
                '</div>'+
                '<div class="col-md-3 ingredient-amount">'+
                '<label class="sr-only">Amount</label>'+
                '<input type="text" class="form-control " name="ingredient_amount[]" id="amount" placeholder="Enter Amount">'+
                '</div>'+
                '<div class="col-md-3 ingredient-unit">'+
                 '<label class="sr-only">Unit</label>'+
                 '<input type="text" class="form-control " id="unit" name="ingredient_unit[]" placeholder="Enter Unit">'+
                 '</div>'+
                '<div class="col-md-3 ingredient-delete">'+
                    '<label class="sr-only">Delete</label>'+
                    '<input type="button" class="form-control delete-ingredient" id="delete-ingredient" value="Delete"></div>';



                $('#ingredients').append(html);


            }
        );

        $('body').on('click','.delete-ingredient',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                $(this).parent().prevAll('.ingredient-unit:first').remove();
                $(this).parent().prevAll('.ingredient-amount:first').remove();
                $(this).parent().prevAll('.ingredient-name:first').remove();
                $(this).parent().remove();

            }
        );

        $('#add_more_process').click(
            function(){
                var html = '<div class="col-md-12 ">'+
                    '<div class="col-md-6 process">'+
                    '<label class="sr-only">Process</label>'+
                    '<textarea class="form-control" name="process[]" placeholder="Write Process" id="process"></textarea>'+
                '</div>'+
                    '<div class="col-md-6 ingredient-delete">'+
                    '<label class="sr-only">Delete</label>'+
                    '<input type="button" class="form-control delete-process" id="delete-ingredient" value="Delete">' +
                    '</div>'+
                    '</div>';



                $('#processes').append(html);


            }
        );

        $('body').on('click','.delete-process',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                $(this).parent().prevAll('.process:first').remove();
                $(this).parent().remove();

            }
        );

        $('#add_more_nutrition').click(
            function(){
                var html = '<div class="col-md-3 nutrition-name">'+
                    '<label class="sr-only">Nutrition Name</label>'+
                    '<input type="text" class="form-control" name="nutrition_name[]" id="nutrition-name" placeholder="Enter Name">'+
                    '</div>'+
                    '<div class="col-md-3 nutrition-amount">'+
                    '<label class="sr-only">Amount</label>'+
                    '<input type="text" class="form-control " name="nutrition_amount[]" id="amount" placeholder="Enter Amount">'+
                    '</div>'+
                    '<div class="col-md-3 nutrition-unit">'+
                    '<label class="sr-only">Unit</label>'+
                    '<input type="text" class="form-control " id="unit" name="nutrition_unit[]" placeholder="Enter Unit">'+
                    '</div>'+
                    '<div class="col-md-3 nutrition-delete">'+
                    '<label class="sr-only">Delete</label>'+
                    '<input type="button" class="form-control delete-nutrition" id="delete-nutrition" value="Delete"></div>';



                $('#nutrition').append(html);


            }
        );

        $('body').on('click','.delete-nutrition',
            function(){
                //console.log( $(this).parent().prevAll('.ingredient-unit:first'));
                $(this).parent().prevAll('.nutrition-unit:first').remove();
                $(this).parent().prevAll('.nutrition-amount:first').remove();
                $(this).parent().prevAll('.nutrition-name:first').remove();
                $(this).parent().remove();

            }
        );
    }
);
