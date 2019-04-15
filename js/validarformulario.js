<script type='text/javascript'>

	function validar(){		
		if(!document.getElementById('acepto').checked){
			<!--todo_correcto = false;-->
			$(document).ready(function()
			{					
			$("t").text("Debe aceptar la política de privacidad");					
			});
			return false;				
		}
		else{
		formulario.submit();
		}
	}
	</script>