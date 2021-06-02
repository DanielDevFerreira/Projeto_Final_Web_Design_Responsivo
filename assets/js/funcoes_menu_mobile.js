    
    /*********** Funções para ativa os Submenus *******/
    
    $(document).ready(function(){
        $("#consulta").click(function(){
            $("#sub").slideToggle(500);
        });
    });
    
    $(document).ready(function(){
        $("#produtos").click(function(){
            $("#sub2").slideToggle(500);
        });
    });
    
    $(document).ready(function(){
        $("#biblioteca").click(function(){
            $("#sub3").slideToggle(500);
        });
    });
    
    
/****************************************************************
*Função para habilitar ou desabilitar menu mobile de acordo com *
* o tamanho da tela no responsive                               *
****************************************************************/
    
    
      $(window).resize(function() {
        var largura = $(window).width(); 
            if ( largura > 890 ) {
                $('#mobile').hide(); 
                    }
             else{
                 $('#mobile').show();
             }
                });


    $(window).resize(function() {
        var largura = $(window).width(); 
            if ( largura < 280 ) {
                $('#mobile').hide(); 
                    }
             else{
                 $('#mobile').show();
             }
                });


/****************************************************************
*            Função para Habilitar o menu                       *
****************************************************************/

 $('#navecao-toggle').click(function(){
    $('body').toggleClass('open');
        });    
    