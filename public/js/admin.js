
    
    //funkcja do sprawdzania czy jest wolne miejsce 
    function checkGrid() {
            var title = $('.grid-chooser .btn-info').attr('title'); // globalna nazwa firmy 
            
            $('.grid-chooser').on('click','button', function(e) {
                
                e.preventDefault();                
                var button = $(this);
                
                //blokada dla juz zajetych miejsc
                if(button.hasClass('btn-inverse')) {
                    
                    var modal = $('#information-modal').modal();
                    modal.find('.companyTitle').text(button.attr('data-original-title'));
                    modal('show');              
                    return;
                }
                if(button.hasClass('btn-info')) {                  
                            
                    return;
                }
               
                var hidden = $('.grid-chooser button.btn-info');
                hidden.html('<i class="fa fa-spinner fa-spin"></i>');
                button.html('<i class="fa fa-spinner fa-spin"></i>');
                
                //tutaj powinien byc ajax do ponownego sprawdzania
                setTimeout(function(){
                    hidden = $('.grid-chooser button.btn-info');
                    hidden.html('<i class="fa fa-square-o"></i>').removeClass('btn-info').attr('data-original-title', hidden.attr('value'));
                   
                   
                    if( typeof(title) !== 'undefined') {
                        button.html('<i class="fa fa-check-square-o"></i>').attr('data-original-title', title).addClass('btn-info');
                    } else {
                        button.html('<i class="fa fa-check-square-o"></i>').attr('data-original-title', 'Twoje miejsce').addClass('btn-info');
                    }
                    

                    $('body').find('#offerNumber').attr('value',button.attr('value'));
                },1000);
                        
                
                return false;
            });
            
        }
    
    function settingsActions() {
     //modal usuwania translacji
        $(document).on('click', '.btn.btn-danger.btn-sm', function(){                

           $('#myModalDelFile').find('#delLanguage').html($(this).attr('id'));
           $('#myModalDelFile').find('#languageNameInput').val($(this).attr('rel'));

        });
        $(document).on('click', '.editLangFile', function(){                

           $('#myModalEditFile').find('#languageName').val($(this).attr('id'));

        });
        
        $('a,button,#transaltionFilePo').tooltip();    //tooltip
        
        //serviceMail
        $('#serviceForm').on('blur', '#emailTitle, #emailDesc', function(){
        
            if( !$(this).val()) { 

                 $('#sendServiceMailButton').attr("disabled", true);         
                 $('#sendServiceMailButton').tooltip('hide');  
            }
            else {
                 $('#sendServiceMailButton').attr("disabled", false);                 
                 $('#sendServiceMailButton').attr('data-original-title', 'Wyślij wiadomość');
            }
        });
    }
    
    function triggerPanelHidding() {
        //zwijanie paneli
        $('.panel').on('click', '.panel-heading', function(){

           var panBody = $( this ).parent().children('.panel-body');

           if(panBody.is(':visible')) {
               panBody.slideUp();
               $('i',this).hide().removeClass('glyphicon-chevron-up').delay(100).addClass('glyphicon-chevron-down').fadeIn();
           } else {
               panBody.slideDown();
               $('i',this).hide().removeClass('glyphicon-chevron-down').delay(100).addClass('glyphicon-chevron-up').fadeIn();
           }    
        });
    }
    
    function fireFancybox(param) {
        
        $("a#single_image").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		
                'hideOnContentClick': true
	});
    }
    
    function fireTinyMCE(param) {
        tinyMCE.init({
                // General options
                language : 'pl',
                mode : "textareas",
                height: 175                
                //width : 700
        });
    }
    
    
jQuery(document).ready(function($) { 
    
    // global actions fire
    checkGrid();
    $('[rel=tooltip]').tooltip();
    
    
 });   