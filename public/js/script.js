$(document).ready(function() {
	
	$('#login').show();
	$('#user').hide();
    $('input[type="checkbox"]').click(function(){
   		if($(this).prop("checked") == true){
   			$('#user').show();
   			$('#login').hide();
   		} else {
   			$('#login').show();
   			$('#user').hide();
   		}
    });

    $('#nom').value="";
    $('#mdp').value="";
     
    $("#commune").chained("#region");

    $('#formAjout').hide();
    $('#affiche').click(function() {
        $('#formAjout').toggle();
    });
    
    
	var specialElementHandlers = {
	    "#editor":function (element, renderer) {
	        return true;
	    }
	};
	$('#cmd').click(function () {
		var doc = new jsPDF('p','pt','letter');
	    doc.fromHTML($("#content").html(), {
	        "width": 170,
	            "elementHandlers": specialElementHandlers
	    });
	    doc.save('copie.pdf');
    	
   });
    
});
