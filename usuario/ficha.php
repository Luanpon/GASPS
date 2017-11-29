
<html>

	<head>
		
		<title>Ficha - Usuário</title>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="assets/js/vendor/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="assets/js/docs.min.js"></script>
		<script src="assets/js/ie-emulation-modes-warning.js"></script>
		<script src="dist/js/bootstrap.js"></script>
		
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="ficha.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
		
	</head>

	<body>

		<div class="container">
		
			<div class="row">
			
				<div class="col-md-auto">
				
					<div class="col-md-auto c1 rounded">
					<div class="row c1-logo">
						<img src="images/logo2.png" width="315" height="100">
					</div>
				
					<div class="row c1-l1">
						<img src="images/homem.png">
					</div>
					
					<div class="row c1-l2">
						<h3 class="txtnome">Carlos Alberto de Nóbrega Neves da Cunha</h3>
					</div>
					</div>
				
				</div>
				
				<div class="col-sm c2">
				
					<div class="row c2-l1 rounded border border-secondary">
						<h2 class="txtquestao">Passo 3 - Imprima ou salve sua senha no celular e apresente-a no local 
						e no dia do atendimento junto com a documentação listada abaixo:<h2>
					</div><br>
					
					<div class="row">
					
						<div class="col-sm rouded c231">
						
							<div class="col-md-auto">
								
								<div class="border border-dark" style="background-color:#ffffff">
							
									<h4 class="text-center txc1">Sua senha de atendimento é:</h4>
									<h1 class="text-center txc2">P-60</h1>
							
								</div>
								
								<div class="dropdown" style="margin-top:20; margin-bottom:20">
								  <button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" autofocus>
									<img src="images/printer.png" width="50" height="50"> Imprimir ou baixar
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#"><h5>Imprimir Senha</h5></a>
									<a class="dropdown-item" href="#"><h5>Imprimir Lista de Documentos Necessários e Local de Atendimento</h5></a>
									<a class="dropdown-item" href="#"><h5>Imprimir Senha, Lista de Documentos Necessários e Local de Atendimento</h5></a>
									<div class="dropdown-divider border border-dark"></div>
									<a class="dropdown-item" href="#"><h5>Baixar Senha</h5></a>
									<a class="dropdown-item" href="#"><h5>Baixar Lista de Documentos Necessários e Local de Atendimento</h5></a>
									<a class="dropdown-item" href="#"><h5>Baixar Senha, Lista de Documentos Necessários e Local de Atendimento</h5></a>
								  </div>
								</div>
								
							</div>
						
						</div>
						
						<div class="col-sm c232">
							
							<div class="row border border-dark" style="background-color:#ffffff">
							<div style="margin-left:10;margin-right:10">
							<h3 style="margin-top:10"><img src="images/doc.png" width="50" height="50"> Documentos Necessários:</h3>
							<h4>1 - Identidade</h4>
							<h4>2 - CPF</h4>
							<h4>3 - Cartão do Sus</h4>
							
							</div>
							</div>
							
							<div class="row border border-dark" style="background-color:#ffffff; margin-top:20">
							<div style="margin-left:10;margin-right:10">
							
							<table class="table">
							  <tbody>
								<tr>
								  <td><h4>Local de atendimento:</h4></td>
								  <td><h5>Posto de Saúde Dr. Olavo Brito</h5></td>
								</tr>
								<tr>
								  <td><h4>Endereço:</h4></td>
								  <td><h5>Avenida Costa Gomes, 222, Paupina</h5></td>
								</tr>
								<tr>
								  <td><h4>Especialidade Médica:</h4></td>
								  <td><h5>Clínico Geral</h5></td>
								</tr>
							  </tbody>
							</table>
							
							</div>
							</div>
							
								
						</div>
					
					</div>
			
				</div>
			
			</div>
		
		</div>
		
		
		<script>
			function printMe() {
				 var mywindow = window.open('', 'PRINT', 'height=400,width=600');

				mywindow.document.write('<html><head><title>teste</title>');

				mywindow.document.close(); // necessary for IE >= 10
				mywindow.focus(); // necessary for IE >= 10*/

				mywindow.print();
				mywindow.close();

				return true;
			}
			
		</script>
		

	</body>

</html>