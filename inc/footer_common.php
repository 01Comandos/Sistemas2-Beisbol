<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<!--PLUGIN PARA LA HORA-->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script src="js/custominputfile.min-es.js"></script>

	<!--PLUGIN PARA TRANSICION ENTRE PAGINAS-->
    <script src="js/animsition.min.js"></script>


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

				//INICIAR IMPUT HORA
				$('.timepicker').wickedpicker();

				//Iniciar selectores
				$('select').material_select();

				//INICIANDO EL COLLAPSIBLE
				$('.collapsible').collapsible({
			    	accordion : false
			    });

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
			    )

			    //ANIMACIONES ENTRE PAGINAS
			    $(".pagina").animsition({
			    	inClass: 'fade-in-left-sm',
				    outClass: 'fade-out-left-sm',
				    inDuration: 1500,
				    outDuration: 800,
				    linkElement: '.animsition-link',
				    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
				    loading: true,
				    loadingParentElement: 'body', //animsition wrapper element
				    loadingClass: 'animsition-loading',
				    loadingInner: '', // e.g '<img src="loading.svg" />'
				    timeout: false,
				    timeoutCountdown: 5000,
				    onLoadEvent: true,
				    browser: [ 'animation-duration', '-webkit-animation-duration'],
				    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
				    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
				    overlay : false,
				    overlayClass : 'animsition-overlay-slide',
				    overlayParentElement : 'body',
				    transition: function(url){ window.location.href = url; }
			    });

	    	}
	    );

	    //INICIALIZAR MODALES
	    $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		 });
	</script>