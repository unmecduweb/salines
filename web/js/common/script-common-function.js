


function showLoading() {
    $('#loading-wrap').fadeIn();
}
function hideLoading() {
    $('#loading-wrap').fadeOut();
}


function initReportBug() {
    $('#formBug form').bind("ajax-success", function (e, customParam) {
        $('#formBug form').replaceWith(customParam.confirm);
    });


    $('#oneBug').hover(function () {
        if (!$(this).hasClass('open')) {
            $('#bugReport').stop().animate({
                right: '10px'
            });
        }
    }, function () {
        if (!$(this).hasClass('open')) {
            $('#bugReport').stop().animate({
                right: '0px'
            });
        }
    });

    $('#oneBug').click(function () {
        //fermeture
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('#bugReport').stop().animate({
                right: '0px'
            });
        }
        //ouverture
        else {
            $(this).addClass('open');
            $('#bugReport').stop().animate({
                right: '350px'
            });
        }
    });
    
//    $('*').click(function(e){
//        if(!$(e.target).parents('#formBug').length && !$(e.target).parents('#oneBug')){
//            $('#bugReport').stop().animate({
//                right: '0px'
//            });
//        }
//        
//    })

    $('#closeBug').click(function () {
        $('#oneBug').removeClass('open');
        $('#bugReport').stop().animate({
            right: '0px'
        });
    });
}


function hiderChange(e)
{
    var elm = e.data.elm;
    $block = $(elm).parents('.form-item');
    if ($(this).prop('checked')) {
        $block.hide();
        $(elm).attr('disabled', 'disabled');
    }
}

function dependencySelectChange(e)
{
    var elm = e.data.elm;
    $block = $(elm).parents('.form-item');

    if ($(this).val() == $(elm).data('show-on')) {
        $block.show();
    } else {
        $block.hide();
    }
}

function dependencyInputChange(e)
{
    log('change');
    var elm = e.data.elm;
    log(elm)
    //Hide Tout le monde (utilisé pour metres vs pieds
    $(elm).closest('.form-group').find('input[data-show-on], select[data-show-on]')
            .attr('disabled', 'disabled')
            .parents('.form-item')
            .hide()

            ;
    $block = $(elm).parents('.form-item');
    if ($(this).prop('checked')) {
        $(elm).removeAttr('disabled');
        if ($(elm).hasClass('select'))
        {
            $(elm).trigger("chosen:updated");
        }
        $block.show();
    }
}
//Gestion des groupes de champs à afficher ou cacher en fonction du select principal oui/non
//Step 2 formulaire
function formGroupHider()
{
    $('select[data-hider=form-group-hider]')
            .each(function () {
                testAndHideGroup($(this))
            })
            .off('change', function () {
                testAndHideGroup($(this))
            })
            .on('change', function () {
                testAndHideGroup($(this))
            });
}

function testAndHideGroup(target)
{

    var $parentInput = target.closest('.form-item');
    var $otherInput = target.closest('.form-group').find('.form-item').not($parentInput);
    var $group = target.closest('.form-group');

    if (target.val() == 1)
    {

        $otherInput.show();
        $group.find('input[type="text"],select').not(target).each(function () {
            $(this).removeAttr('disabled');
        });

    }
    else
    {
        $otherInput.hide();
//        log($otherInput);
        $otherInput.find('.checkbox').prop('checked', false);
        $otherInput.find('.field').val('');
//        $group.find('input[type="text"],select').not(target).each(function(){
//            log($(this).attr('id'))
//                    $(this).attr('disabled','disabled').removeAttr('required');
//                });
    }
}

//function setShowOnElement(){
//    //Fonction de formulaire
//    //Affiche ou cache un champ en fonction d'une checkbox ou d'un select en parametre data-element
//    $('input[data-show-on], select[data-show-on]').each(function(i,elm){
//        $block = $(elm).parents('.form-item:first');
//        $block.hide();
//        //Form group possède l'id [pattern] de tous les champs enfants
//        $dependency = $('#'+$(elm).parents('.form-group').attr('id')+'_'+$(elm).data('on-element'));
//        
//        if($dependency.is('select')){
//
//            if($dependency.val() == $(elm).data('show-on')){
//                $block.show();
//            }else{
//                $block.hide();
//            }
//
//            $dependency.change(function(){
//                $block = $(elm).parents('.form-item');
//
//                if($(this).val() == $(elm).data('show-on')){
//                    $block.show();
//                }else{
//                    $block.hide();
//                }
//
//            });
//        }else if($dependency.is('input[type="checkbox"],input[type="radio"] ')){
//            if($dependency.prop('checked')){
//                $block.show();
//            }else{
//                $block.hide();
//            }
//            
//            $dependency.change(function(){
//                
//                $block = $(elm).parents('.form-item');
//                if($(this).prop('checked')){
//                    $block.show();
//                }else{
//                    $block.hide();
//                }
//
//            });
//        }
//                
//        
//    });
//}
