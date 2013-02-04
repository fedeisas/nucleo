$(document).ready(function() {
	$( '#carousel' ).elastislide({
        minItems: 1
    });

    $("#map").goMap({
    	latitude: -34.63955, 
    	longitude: -58.49138,
    	zoom: 10,
    	scaleControl: true, 
        maptype: 'ROADMAP',
        markers: [{  
            latitude: -34.59575, 
            longitude: -58.39603,
            html: { 
                content: 'Buenos Aires', 
                popup: false
            } 
        },{  
            latitude: -34.68463, 
            longitude: -58.55753,
            html: { 
                content: 'Shopping de San Justo', 
                popup: false 
            } 
        }], 
        hideByClick:   false, 
        oneInfoWindow: true 
    }); 

    $('#contact-form').validVal();

    $( "#contact-form input.button" ).click(function( event ) {

        event.preventDefault();

        var form_data = $( "#contact-form" ).triggerHandler( "submitForm" );

        if ( form_data ) {
            $.ajax({
                type: "POST",
                url: $("#contact-form").attr('action'),
                data: form_data,
                success: function( msg ) {
                    $("#contact-form").fadeOut({
                        complete: function() {
                            $( "#contact-form" ).trigger( "resetForm" );
                            $('.contact-content .message').html(msg).fadeIn();        
                        }
                    });                   
                }
            });
        }
    });
});