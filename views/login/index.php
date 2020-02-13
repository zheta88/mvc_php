<!doctype html>
<html lang="en">
  <head>
    <title>PHP 7 Login</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="public/css/login.css">
  </head>

  <body>
	  
		<div class="container-fluid" style="text-align:center;">
		<ul class="menuinicio" style="text-align:left; color:red;" >
            <li><a href="main">Inicio</a></li>
        </ul>
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="public/image/login2.png" class="avatar" alt="">
							<h2>Login</h2>

							<form action="sesionadmin" method="post">                           	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="Correo" placeholder="Email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="Contrasena" placeholder="Password" required>       
								</div>								    
									<button type="submit" class="btn btn-success btn-block">Login</button>
							</form>
							<!-- Collapse a form when user click Lost your password? link-->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Lost your password?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
															
								</div>
							</div>
												
							<hr><p><a href="nuevo" title="Create an account">Create an account</a>.</p>								
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