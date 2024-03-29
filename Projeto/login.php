<!doctype html>
<html lang="pt-br">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
            <style>
               body {
                    background-color: cornsilk;
                }
                pesquisa {
                    margin-right: 200px;
                }

            </style>
            <img src="img/vinapet1.png" width="10%" align="left">
            <br>
            <div class="container">
              <div class="card my-4" >
                <h5 class="card-header">Pesquise</h5>
                <div class="card-body">
                  <div class="input-group" width="10%">
                    <input type="text" class="form-control" placeholder="Encontre um produto">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
                </div> 
                <br>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <div class="container">
                        <a class="navbar-brand" href="index.html">Vinapet</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                              <a class="nav-link" href="#">Cães
                                <span class="sr-only">(current)</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="categoria.html">Gatos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="categoria.html">Pássaros</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="categoria.html">Acessórios</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="categoria.html">Roupas</a>
                            </li>
                            <li class="nav-item active dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Entre ou cadastre-se
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="login.html">Login</a>
                                <a class="dropdown-item" href="adicionarCliente.html">Cadastre-se</a>
                                <a class="dropdown-item" href="perfilCliente.html">Meu Perfil</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
 
    </head>
    <body>
            <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                            <form class="login100-form validate-form" action="validacao.php" method="post"  >
                                <span class="login100-form-title p-b-33">
                                   Login
                                </span>
            
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="email" placeholder="Email ou CPF">
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>
            
                                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="pass" placeholder="Senha">
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>
            
                                <div class="container-login100-form-btn m-t-20">
                                    <button class="login100-form-btn">
                                        Entrar
                                    </button>
                                </div>
            
                                <div class="text-center p-t-45 p-b-4">
                                    <span class="txt1">
                                        Esqueceu
                                    </span>
            
                                    <a href="#" class="txt2 hov1">
                                        Nome / Senha?
                                    </a>
                                </div>
            
                                <div class="text-center">
                                    <span class="txt1">
                                        Cadastrar?
                                    </span>
            
                                    <a href="adicionarCliente.html" class="txt2 hov1">
                                        Clique aqui
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <footer class="py-3 bg-dark">
              <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Vinapet 2019</p>
              </div>
            </footer>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>