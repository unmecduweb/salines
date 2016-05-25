/*******************************************************************************/
/********************************* ZEN LIBRARY  ********************************/

/* Fonctions communes aux projets zen (hall-inn & like-inn) */


//Evite les erreurs liés au console.log
function log(msg) {
    try {
        console.log(msg);
    } catch (e) {

    }
}

//Convertit un formulaire ou un objet en JSON (utilisé pour l'envoie de donnée en ajax)
$.fn.serializeObject = function ()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};


/******************************* CIRCLE BUTTON ********************************/
//Gestion des circle-button (boutton rouge présent dans la barre du titre sur la majorité des pages)
//Au click sur un de ces bouttons, aplique la class selected, déclenche l'évenement présent dans data-event
function manageCircleButton() {
    $('.circle-button').click(function () {

        if (!$(this).hasClass('selected')) {
            $('.circle-button.selected').removeClass('selected');

            $(this).addClass('selected');

            $(this).trigger($(this).data('event'));
        }
    });
}

/******************************* FORM FUNCTION ********************************/
//Fonctions liées au formulaires des projets ZEN

//Affiche ou cache un champ en fonction d'une checkbox ou d'un select en parametre data-element
function formToggler()
{

    $('input[data-show-on], select[data-show-on]').each(function (i, elm) {
        $block = $(elm).parents('.form-item');
        $block.hide();


        //Form group possède l'id [pattern] de tous les champs enfants
        $dependency = $('#' + $(elm).parents('.form-group').attr('id') + '_' + $(elm).data('on-element'));
        $hider = $('#' + $(elm).parents('.form-group').attr('id') + '_' + $(elm).data('hider'));

        if ($dependency.is('select')) {

            if ($dependency.val() == $(elm).data('show-on')) {
                $block.show();
            } else {
                $block.hide();
            }

            $dependency
                    .off('change', {elm: elm}, dependencySelectChange)
                    .on('change', {elm: elm}, dependencySelectChange);

        } else if ($dependency.is('input[type="checkbox"],input[type="radio"] ')) {
            if ($dependency.prop('checked')) {
                $block.show();
            } else {
                $(elm).attr('disabled', 'disabled');
                $block.hide();
            }

            $dependency
                    .off('change', {elm: elm}, dependencyInputChange)
                    .on('change', {elm: elm}, dependencyInputChange);

            $hider.off('change', {elm: elm}, hiderChange)
                    .on('change', {elm: elm}, hiderChange);

        }


    });
}

//Initialise le plugin chosen select en fonction des paramètres présent dans la class du select
function initSelectChoice() {



    // !!! A revoir crer un tableau d'options
    $('.select').each(function (i, elm) {

        if (!$(elm).hasClass('initialized') && !$(elm).hasClass('chosen-container')) {

            if ($(elm).is(':required')) {
                $(elm).addClass('required');
                $(elm).prop('required', false);
            }



            //Créer objet d'options par défaut
            var options = {
                'width': '100%',
                'disable_search': false,
                'inherit_select_classes': true,
                'placeholder_text_single': 'Sélectionnez dans la liste'
            };
            //Gestion des tailles
            if ($(elm).hasClass('select-full-width'))
                options.width = '100%';
            if ($(elm).hasClass('select-width-custom'))
                options.width = $(elm).data('width');


            //Affichage du champ search dans le select
            if ($(elm).hasClass('select-search'))
                options.disable_search = false;

            $(elm).chosen(options);

            $(elm).addClass('initialized');
        }

        //Au changement de valeur sur le select, on supprime le class erreur (bordure rouge) si elle existe
        $(elm).on('change', function (event, params) {
            $(this).nextAll('.chosen-container').removeClass('field-error');
            $(this).prevAll('.error-message').remove();
        });
    });


    //Au post de formulaire on parcours les champs select, affiche une erreur si ont la class required est que leur value est vide
    $('form').submit(function () {
        checkFormBeforePost($(this));
    });


}


function checkFormBeforePost(form) {
    $return = true;
    //on parcourt les champs select qui sont marqués required, mais qui sont actif (cf sinon problème avec formToggleer)
    $(form).find('select.required:not(:disabled) ').each(function (i, select) {

        if ($(select).val() == '') {
            $('html, body').animate({
                scrollTop: $(select).nextAll('.chosen-container').offset().top - 300
            }, 200, function () {
                $(select).nextAll('.chosen-container').addClass('field-error');
                $(select).prev('label').addClass('error');
            }
            );

            $return = false;
        }
    });
    log('fzegfzergzrgzr')
    log($return)
    return $return;
}

//Ajoute le préfixe http au champ de type url qui n'ont pas de protocle renseigné
function initFieldUrl() {
    $('input[type="url"]').each(function (i, field) {
        $(field).change(function () {
            log($(this).val());
            if ($(this).val().substr(0, 7) !== "http://" && $(this).val().substr(0, 8) !== "https://") {
                $(this).val('http://' + $(this).val());
            }
        })
    });
}

function initTooltip() {
    $('[data-toggle=tooltip]').tooltip({html: true});
    $('.help-tooltip').tooltip({
        'placement': 'bottom'
    });
}

function initFieldDate() {

    //Datepicker
    $('.field-date').each(function (i, field) {
        setFieldDate($(field));
    });
}

function setFieldDate(field) {

    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

    $options = {
        todayHighlight: true,
        autoclose: true,
        format: 'D d M yy',
        language: 'fr',
        immediateUpdates: true
    };


    if ($(field).data('start-date')) {
        if ($(field).data('start-date') == 'today') {
            $options.startDate = today;

        } else {
            $options.startDate = startDate;
        }
    }

    $(field)
            .datepicker($options)
            .on('changeDate', function (e) {

                //Champ date-in liée à date_out
                if ($(this).data('dependency')) {
                    var pattern = $(this).parents('form').prop('name');
                    var $dependency = $('#' + pattern + '_' + $(this).data('dependency'));

                    startDate = new Date(e.date.getFullYear(), e.date.getMonth(), parseInt(e.date.getDate()) + 1, 0, 0, 0, 0);
                    $dependency.prev('.field-date').datepicker('setStartDate', startDate);
                    $dependency.prev('.field-date').datepicker('update', startDate);
                    $dependency.val(getDateFormatted(startDate));
                }

                $(this).next().val(getDateFormatted(e.date));
            })

            ;


    if ($.trim($(field).next().val()) != "") {
        //update du champ date, pour qu'il soit dans le format spécifié par le plugin
        $(field).datepicker('update', new Date($(field).next().val()))
    }

}

function getDateFormatted(date) {
    var _d = date.getDate(),
            d = _d > 9 ? _d : '0' + _d,
            _m = date.getMonth() + 1,
            m = _m > 9 ? _m : '0' + _m,
            formatted = date.getFullYear() + '-' + m + '-' + d;
    return formatted;
}


function initNoticeFlash() {

    $('.flash-notice').each(function (i, notice) {
        generateNotice($(notice).data('type'), $(notice).html());
    });

}

function generateNotice(type, text) {

    var n = noty({
        text: text,
        type: type,
        dismissQueue: true,
        layout: 'bottomRight',
        closeWith: ['click'],
        maxVisible: 10,
        animation: {
            open: 'animated bounceInDown',
            close: 'animated bounceOutDown',
            easing: 'swing',
            speed: 500
        }
    });
}

//Vérifie la réponse du serveur et affiche les messages success, ou errors si besoin
function checkAjaxResponse(result) {
    if (result.success) {
        if (typeof result.success != 'undefined') {
            for (var fieldIndex in result.success) {
                generateNotice('success', result.success[fieldIndex]);

            }
        }

        return true;
    } else {

        if (typeof result.errors != 'undefined') {
            for (var fieldIndex in result.errors) {

                generateNotice('error', result.errors[fieldIndex]);

            }
        }



        return false;
    }

}

function setFieldCollectionTag($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div class="form-item"></div>').append(newForm);
    $newLinkLi.before($newFormLi);

}

function ajaxForm() {
    $('.ajax-form-submit, .modal-submit').click(function (e) {
        e.preventDefault();
        $form = $(this).parents('form');
        if (checkFormBeforePost($form)) {
            $.ajax({
                method: $form.prop('method'),
                url: $form.prop('action'),
                datatype: 'json',
                data: $form.serialize(),
                success: function (resp) {
                    $form.trigger("ajax-success", [resp.customParam]);
                    if (resp.type && resp.content) {
                        if (resp.content)
                            generateNotice(resp.type, resp.content);
                    }
                }
            });
        }
        if ($form.parents('.modal').length > 0) {
            $form.parents('.modal').modal('hide');
        }
    });
}

//Affiche une alert au click sur un bouton submit lorsqu'un utilisateur admin tente de modifer un établissement
function userNotAllowToEdit(){
    alert('Vous nêtes pas autorisé à effectuer cette action');
    return false;
}