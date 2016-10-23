

jQuery(document).ready(function() { 
	var $klass = 'hidden';
  	  	
    jQuery('header .main-menu li.Level1').hover(function(){

    		var $test = jQuery(this).attr('class');
    		if( $test.indexOf('active-trail') >= 0){

    					$klass = '';
    		    	}else {
    					$klass = 'hidden';
    		    	}

        jQuery('li.active-trail ul.submenu').addClass($klass);
    },     
    function(){    
        jQuery('li.active-trail ul.submenu').removeClass($klass);     
    });

//jQuery('header .main-menu li a.no-submenu').hover(function(){
//
//    		var $test = jQuery(this).attr('class');
//    		if( $test.indexOf('active-trail') >= 0){
//
//    					$klass = '';
//    		    	}else {
//    					$klass = 'hidden';
//    		    	}
//
//        jQuery('li.active-trail ul.submenu').addClass($klass);
//    },     
//    function(){    
//        jQuery('li.active-trail ul.submenu').removeClass($klass);     
//    });
//


     
    
});   