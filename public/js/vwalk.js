jQuery(document).ready(function($) {
       
    function topMenu() {
        $('body').on('click', '.expand-button', function() {
            var navbar = $('.navbar.navbar-default');
            var navbarSmall = $('.show-navbar-menu');
            var footer = $('#footer');
            
            if(navbar.is(':visible')) {
                //footer.fadeOut();
                footer.animate({height: "0px", padding: "0px",  minHeight:"0px"},500);
                navbar.animate({height: "0px", minHeight:"1px"}, 500, function(){
                    navbarSmall.hide();
                    navbarSmall.removeClass('hidden');
                    navbarSmall.fadeIn();
                    navbar.hide();
                });
//                navbar.fadeOut(function() {
//                    navbarSmall.hide();
//                    navbarSmall.removeClass('hidden');
//                    navbarSmall.fadeIn();
////                    $('.navbar.navbar-default.navbar-fixed-top')
//                });
                
            } else {
                
                 navbarSmall.fadeOut(function(){
                     navbar.show();
                     navbar.animate({height: "50px", minHeight:"50px"}, 500);
                     footer.animate({height: "35px",  padding: "4px"}, 500);
//                     navbar.fadeIn();
//                     footer.fadeIn();
                 });
                    
            }
            
            
           
           return false;
        });
        
    }
    
    topMenu();
    function contactModal() {       
        
         $('#contactModal .modal-footer').on('click','.btn-primary', function(e) {
             
             var modal = $('#contactModal');
             var form  = $('#contactModal').find('form');
             submitContactForm(form, modal);
             e.preventDefault;
             return false;      
         });
    }
    
    function submitContactForm(oForm, oModal) {
        
            var oUrl = 'ajax/add';                
            var form = oForm;
        
            if (form.validationEngine('validate')) {
                
                var data = form.serialize();
                form.fadeOut(function() {
                     oModal.find('.modal-footer').hide();  // tutaj wicej poprawek by sie zdało :)
                     form.html(defineLoader()).fadeIn('fast');
                });            
                
                setTimeout(function() {              
                            $.ajax({
                                
                                 type : 'POST',                       
                                 url  : oUrl,
                                 data : data,
                                
                                 success : function(result) {
                                    
                                    form.fadeOut(function() {
                                        form.html('<div class="alert alert-info">Wiadomość została wysłana</div>').fadeIn();  
                                       
                                    });
                                  
                                    
                                 },
                                 error : function(xmlHttpRequest, textStatus, errorThrown) {                                   
                                  
                                     form.fadeOut(function() {
                                        form.html('<div class="alert alert-danger">Niestety wystapił błąd ...</div>').fadeIn();                                          
                                    });                                
                                   
                                }
                            });
                    },2500);
                
            }
            return false;    
        
    }    
    
    //validate form 
    function validateForm() {
        if ($('form.validate').length > 0) {
            $('form.validate').validationEngine('attach', {
                autoHidePrompt : 'false',
                autoHideDelay : '7000',
                fixed : true,
                scroll : true,
                binded : false,
                promptPosition : 'centerLeft'
                
            });
        }        
    }
    
    function defineLoader() {  

        return '<div class="default-loader">\n\
                   <img src="img/loader.GIF" alt="loading ...">\n\
                </div>';    
     }
     
    $('[rel=tooltip]').tooltip(); //tootlip
    contactModal();
    validateForm();
   
});