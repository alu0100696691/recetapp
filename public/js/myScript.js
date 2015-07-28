
$(function(){
    $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });

$(function(){
    	// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
      $(document).on("click",".agregar",function(){
    		$("#tabla tbody tr:eq(0)").clone().removeClass('fila-base').appendTo("#tabla");
    	});

    	// Evento que selecciona la fila y la elimina
      $(document).on("click",".eliminar",function(){
    		var parent = $(this).parents().get(1);
    		$(parent).remove();
    	});

      $("input[name=image]").change(function(){
        alert(varjs);
        $(this).next().attr('src','images/page5-img3.jpg');
        //$(this).next().src(varjs);
      });

});
