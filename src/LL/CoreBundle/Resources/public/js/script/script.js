$(document).ready(function () {
    initSelectChoice();
    
    
    
    
    
    manageProductionPrices();
    manageCollectionProducts();
});




function manageCollectionProducts(){
    // garde une trace du nombre de champs email qui ont été affichés
    var emailCount = 0;

    $('.collection-add').click(function() {
        var $list = $(this).prev('.collection-list');

        // parcourt le template prototype
        var newWidget = $list.attr('data-prototype');
        // remplace les "__name__" utilisés dans l'id et le nom du prototype
        // par un nombre unique pour chaque email
        // le nom de l'attribut final ressemblera à name="contact[emails][2]"
        newWidget = newWidget.replace(/__name__/g, emailCount);
emailCount++;

        // créer une nouvelle liste d'éléments et l'ajoute à notre liste
        var newLi = $('<li></li>').html(newWidget);
        newLi.appendTo($list);
        setCollectionProductsUnity();
        
        return false;

    });
}

function setCollectionProductsUnity(){
    $('#products-quantity-fields-list li').each(function(i,item){
        log($(item).find('select.select option:selected').data('unity'));
        
        $(item).find('.product-unity').html($(item).find('select.select option:selected').data('unity'))
    });
}


function manageProductionPrices(){
    var REF_nbPerson = $('#nb-person').data('ref');

    $('#nb-person').focusout(function(){
        
        var nbPerson = $(this).val();
        
        $('.product-line').each(function(i, product){
            var REF_quantity = $(product).find('.quantity').data('ref')
            var REF_price = $(product).find('.price').data('ref')
            
            //NOUVELLE QUANTITE
            log(nbPerson+' * '+ REF_quantity+' / '+REF_nbPerson);
            var quantity = (nbPerson * REF_quantity) / REF_nbPerson;
            $(product).find('.quantity').html(quantity)
            
            log(nbPerson+' * (' + REF_price +'*'+quantity+') / '+REF_nbPerson);
            var price = REF_price*quantity;
            $(product).find('.price').html(price)
        });
       
    });
}