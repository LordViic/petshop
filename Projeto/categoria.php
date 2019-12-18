!doctype html>
<html lang="pt-br">
  <?php
  $host = "localhost";
  $db   = "petshop";
  $user = "root";
  $pass = "";
  $con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($db, $con);
  $query = sprintf("SELECT foto, nome, preco, obs FROM produto where categoria =  ");
  $dados = mysql_query($query, $con) or die(mysql_error());
  $linha = mysql_fetch_assoc($dados);
  $i = 1;
  ?>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
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
                        <a class="navbar-brand" href="#">Vinapet</a>
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
                                <a class="dropdown-item" href="adicionarCliente.php">Cadastre-se</a>
                                <a class="dropdown-item" href="perfilCliente.html">Meu Perfil</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
 
    </head>
    <body>
    <?php
       if($i < 7) {
      do {
        i++;
   ?>
            <br>
            <div class="container" align="center">
              <div class="col-lg-9">
              <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?=$linha['img']?>" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#"><?=$linha['nome']?></a>
                      </h4>
                      <h5><?=$linha['preco']?></h5>
                      <p class="card-text"><?=$linha['obs']?></p>
                    </div>
                    <div class="card-footer">
                      <a href="#" class="card-link" onclick="AddCarrinho">Adicionar ao Carrinho</a>
                      <a href="produto.html" class="card-link">Detalhes</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <?php
        }while($linha = mysql_fetch_assoc($dados));
    }
?>
            <footer class="py-3 bg-dark">
              <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Vinapet 2019</p>
              </div>
            </footer>
            <script>
                function AddCarrinho(nome, qtd, valor, posicao)
                { 
                localStorage.setItem("nome" + posicao, nome);
                localStorage.setItem("qtd" + posicao, qtd);
                valor = valor * qtd;
                localStorage.setItem("valor" + posicao, valor);
                alert("Produto adicionado ao carrinho!");
                }
               </script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>