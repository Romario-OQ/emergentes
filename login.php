<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
	<link rel="stylesheet" href="css/custom.css">
  </head>

  <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="img/logo.jpg" width="200" height="200" >
							<h2>Calidad del Agua</h2>

							<form action="check-login.php" method="post">                           	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="email" placeholder="Email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>       
								</div>								    
									<button type="submit"  href="pagina.php" class="btn btn-success btn-block">Login</button>
							</form>
							</div>
													
							<hr><p>Crear una cuenta? <a href="index.php" title="Create an account">Crear Cuenta</a>.</p>								
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div><!--/.row-->
		</div><!-- /.container -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	
