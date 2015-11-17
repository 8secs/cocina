/**
 * Created by andres on 12/01/15.
 */
/**
 * File: ItemSwitcher.js
 */

(function($) {

    $.entwine('ss', function($){
        $('#Form_ItemEditForm').entwine({
            onadd: function() {
                hideElements();
                $('textarea').css('height', 0);
            }
        });
    });

    $

    $('select[name="Tipo"]').entwine({
        onchange:function(e){
            hideElements();
            mostrarElemento(this.value);
        }
    });

    function hideElements(){
        $('.Imagen').hide();
        $('.Grid').hide();
        $('.Banner').hide();
        $('.Contenido').hide();
        if($('select[name="Tipo"] :selected').val() != 'Selecciona'){
            mostrarElemento($('select[name="Tipo"] :selected').val());
            $('textarea').css('height', 0);
        }
    }

    function mostrarElemento(val){
        if(val == 'Banner'){
            $('.Banner').show('slow');
        }else if(val == 'Grid'){
            $('.Grid').show('slow');
        }else if(val == 'Imagen Arriba' || val == 'Imagen Drcha' || val == 'Imagen Izda'  ){
            $('.Imagen').show('slow');
            $('.Contenido').show('slow');
        }
    }

})(jQuery);
