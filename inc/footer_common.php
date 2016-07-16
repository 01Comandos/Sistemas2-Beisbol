<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- complementos -->
    <script src="js/complementos.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>		
	    $(document).ready(
	    	function() { 

	    		//INICIALIZAR NICESCROLL
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999" , cursorborder:"0px" , cursorborderradius:"0px" , cursorcolor: "#88c057"});
	    		
			    //inicializar datepicker
				$('.datepicker').pickadate({
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15 // Creates a dropdown of 15 years to control year
				});		

				//Iniciar selectores
				$('select').material_select();

			    //PASADORES FORMULARIO LOGIN
			    $("#recover").click(
			    	function(){			    		
			    		$(".loginForm").hide("slow");
			    		$(".recoverForm").show("slow");
			    	}
			    );

			    $("#login").click(
			    	function(){			    		
			    		$(".recoverForm").hide("slow");
			    		$(".loginForm").show("slow");	
			    	}
			    );	

	    	}
	    );

	    //INICIALIZAR MODALES
	    $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		 });
	</script>