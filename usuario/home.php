<?php 

	session_start();
	
	if(isset($_SESSION['usuario'])){
		
		$usuario = $_SESSION['usuario'];
		$senha = $_SESSION['senha'];
		
		$con = mysql_connect('localhost','root','');
		mysql_select_db("gaspsbd");
	
		$query = "SELECT * FROM usuario WHERE usuario.login='".$usuario."' AND usuario.senha='".$senha."'";
		$res = mysql_query($query,$con) or die(mysql_error());
		
		if(mysql_num_rows($res)>0){
			
			while($row=mysql_fetch_assoc($res)){
				
				$nome = $row['nome'];
				$sexo = $row['sexo'];
				
			}
			
		}
		
		else{}
		
	}
	
	else{
		
		header('Location: C:\xampp\htdocs\GASPS\login.php');
		
	}



?>


<html>

	<head>
		
		<title>Home - Usuário</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="home.css" rel="stylesheet">
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
						<h3 class="txtnome"><?php echo $nome; ?></h3>
					</div>
					</div>
				
				</div>
				
				<div class="col-sm c2">
				
					<div class="row c2-l1 rounded border border-secondary">
						<h2 class="txtquestao">Passo 1 - Escolha o posto de saúde e especialidade médica com a qual deseja se consultar:<h2>
					</div><br>
					
					<div class="row">
						
						<table class="table table-dark table-bordered">
						
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col"><h3><img src="images/posto.png" width="100" height="100"> Posto de Saúde</h3></th>
							  <th scope="col"><h3><img src="images/medico.png" width="100" height="100"> Especialidade Médica</h3></th>
							</tr>
						  </thead>
						  
						  <tbody>
						  
							<tr>
							  <th scope="row">1</th>
								  <td>
									<h4>
									Posto de Saúde Maria Vianna
									<h4>
									<h5>
									Rua das Flores,276,Dionísio Torres
									<h5>
								  </td>
							  <td>
							  <button type="button" class="btn btn-primary bot">Clinico Geral</button>
							  <button type="button" class="btn btn-primary bot">Dentista</button>
							  <button type="button" class="btn btn-primary bot">Dentista</button>
							  </td>
							</tr>
							
							<tr>
							  <th scope="row">2</th>
							  <td>
								<h4>
								Maria Vianna
								<h4>
								<h5>
								Rua das Flores,276,Dionísio Torres
								<h5>
							  </td>
							  <td>
							  <button type="button" class="btn btn-primary bot">Ortopedista</button>
							  <button type="button" class="btn btn-primary bot">Cirurgião</button>
							  </td>
							</tr>
							
							<tr>
							  <th scope="row">2</th>
							  <td>
								<h4>
								Maria Vianna
								<h4>
								<h5>
								Rua das Flores,276,Dionísio Torres
								<h5>
							  </td>
							  <td>
							  <button type="button" class="btn btn-primary bot">Ortopedista</button>
							  <button type="button" class="btn btn-primary bot">Cirurgião</button>
							  </td>
							</tr>
							
						  </tbody>
						  
						</table>
						
					</div>
			
				</div>
			
			</div>
		
		</div>

	</body>

</html>