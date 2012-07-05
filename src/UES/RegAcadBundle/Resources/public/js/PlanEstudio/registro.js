$(document).ready(function(){
    // ************* INTERFAZ *****************
    $( "#ciclos" ).accordion({
        fillSpace: true
    });
    $( "#plan_estudio" ).resizable({
        minHeight: '28em',
        resize: function() {
            $( "#ciclos" ).accordion( "resize" );
        }
    }); 
    // there's the gallery and the trash
    var $gallery = $( "#gallery" ),
    $trash = $( ".ciclo" );
    comportamiento();

    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function agregarAPlan( $item ) {
        $item.fadeOut(function() {
            var ciclo_activo = $( "#ciclos" ).accordion( "option", "active" ) + 1 ;

            $("#data_ciclo"+ciclo_activo).html(parseInt($("#data_ciclo"+ciclo_activo).html()) + 1);
            
            $capa_ciclo = $('#ciclo'+ciclo_activo);
            var $list = $( "ul", $capa_ciclo ).length ?
            $( "ul", $capa_ciclo ) :
            $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $capa_ciclo );
            
            $item.find( "a.ui-icon-circle-arrow-e" ).remove();
            $item.append( recycle_icon ).appendTo( $list ).fadeIn();
        });
    }

    // image recycle function
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Agregar a plan de estudio' class='ui-icon ui-icon-circle-arrow-e'>Agregar a plan de estudio</a>";
    function recycleImage( $item ) {
        var ciclo_activo = $( "#ciclos" ).accordion( "option", "active" ) + 1 ;

        $("#data_ciclo"+ciclo_activo).html(parseInt($("#data_ciclo"+ciclo_activo).html()) - 1);
        $item.fadeOut(function() {
            $item
            .find( "a.ui-icon-refresh" )
            .remove()
            .end()            
            .append(trash_icon)            
            .appendTo($gallery)
            .fadeIn();
        });
    }        
    
    
    
    // ************ COMPORTAMIENTO *********    
    function leerUnidadesEstudio(filtro){        
        $("#gallery").html("");
        if ($('#form_carreras').val()==''){
            $( "#dialog-modal" ).html("Debe elegir una carrera");
            $( "#dialog-modal" ).dialog({
                height: 140,
                modal: true
            });            
        }
        else{
            $.getJSON($('#ruta_plan_estudio_unidades_estudio').val(), {
                dato_filtro:filtro, 
                id_carrera:$('#form_carreras').val(), 
                incluidas:false
            },
            function(data){
                $.each(data, function(i, item) {
                    $item = '<li class="ui-widget-content ui-corner-tr" id="unidad_estudio_'+item.id+'">'+
                    '<h5 class="ui-widget-header" title="'+item.nombre+'">'+item.codigo+'</h5>'+
                    item.nombre+
                    '<a href="#" title="Agregar a plan de estudio" class="ui-icon ui-icon-circle-arrow-e">Agregar a plan de estudio</a>'+
                    '</li>';
                    $('#gallery').append($item);
                });
                comportamiento();
            }            
            )
            
        }
    }
    $('#form_carreras').change(function(){
        leerUnidadesEstudio('');
    });
    
    function comportamiento(){
                  

        // let the gallery items be draggable
        $( "li", $gallery ).draggable({
            cancel: "a.ui-icon", // clicking an icon won't initiate dragging
            revert: "invalid", // when not dropped, the item will revert back to its initial position
            //containment: $( "#demo-frame" ).length ? "#demo-frame" : "document", // stick to demo-frame if present
            helper: "clone",
            cursor: "move"
        });

        // let the trash be droppable, accepting the gallery items
        $("#ciclos div").droppable({
            accept: "#gallery > li",
            activeClass: "ui-state-highlight",
            drop: function( event, ui ) {
                agregarAPlan( ui.draggable);
            }
        });

        // let the gallery be droppable as well, accepting items from the trash
        $gallery.droppable({
            accept: ".ciclo li",
            activeClass: "custom-state-active",
            drop: function( event, ui ) {
                recycleImage( ui.draggable );
            }
        });
        // resolve the icons behavior with event delegation
        $( "ul.gallery > li" ).click(function( event ) {
            var $item = $( this ),
            $target = $( event.target );

            if ( $target.is( "a.ui-icon-circle-arrow-e" ) ) {
                agregarAPlan( $item );
            } else if ( $target.is( "a.ui-icon-refresh" ) ) {
                recycleImage( $item );
            }

            return false;
        });
    }
    
    $('#filtrar').click(function(){
        leerUnidadesEstudio($('#filtro').val());
    });
});