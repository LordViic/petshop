<!doctype html>
<html lang="pt-br">
    <head>
      <?php 
      require 'adCliente.php';
      ?>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
            <style>
               body {
                    background-color: cornsilk;
                }
                #pesquisa {
                    margin-right: 200px;
                }

                #cadcli  {
                   border:1px solid black;
                   border-radius: 5px;
                }

            </style>
            <script type="text/javascript" >
    
              function limpa_formulário_cep() {
    
                      document.getElementById('rua').value=("");
                      document.getElementById('bairro').value=("");
                      document.getElementById('cidade').value=("");
                      document.getElementById('uf').value=("");
              }
          
              function meu_callback(conteudo) {
                  if (!("erro" in conteudo)) {
          
                      document.getElementById('rua').value=(conteudo.logradouro);
                      document.getElementById('bairro').value=(conteudo.bairro);
                      document.getElementById('cidade').value=(conteudo.localidade);
                      document.getElementById('uf').value=(conteudo.uf);
                  } 
                  else {
                  
                      limpa_formulário_cep();
                      alert("CEP não encontrado.");
                  }
              }
                  
              function pesquisacep(valor) {
          

                  var cep = valor.replace(/\D/g, '');

                  if (cep != "") {
          

                      var validacep = /^[0-9]{8}$/;
          
                      if(validacep.test(cep)) {

                          document.getElementById('rua').value="...";
                          document.getElementById('bairro').value="...";
                          document.getElementById('cidade').value="...";
                          document.getElementById('uf').value="...";
          
        
                          var script = document.createElement('script');
          
                
                          script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
          
     
                          document.body.appendChild(script);
          
                      } 
                      else {
                        
                          limpa_formulário_cep();
                          alert("Formato de CEP inválido.");
                      }
                  } 
                  else {
           
                      limpa_formulário_cep();
                  }
              };
          
              </script>
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
        <br>
            <form>
                    <div class="container">
                      <form action="adCliente.php" method="POST">
                      <fieldset class="col-md-12" id="cadcli">
                        <div class="form-row">
                        <legend align="center">Cadastro de Cliente</legend>
                        <br>
                        <div class="form-group col-md-2">
                          <label for="cpf">CPF</label>
                          <input type="number" class="form-control" id="nomeCliente" required>
                        </div>
                    <div class="form-group col-md-10">
                      <label for="nomeCliente">Nome Completo</label>
                      <input type="text" class="form-control" id="nomeCliente" required minlength="3" maxlength="50">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="nascimento">Data de Nascimento</label>
                      <input type="date" class="form-control" id="nascimento" required>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" required>
                        </div>
                      <div class="form-group col-md-8">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                      </div>
                      <div class="form-group col-md-8">
                        <label for="senha">E-mail</label>
                        <input type="password" class="form-control" id="senha" required>
                      </div>
                      <br>
                        <form method="get" action=".">
                            <div class="form-group col-md-2">
                            <label for="cep">CEP:</label>
                            <input name="cep" type="text" id="cep" value="" class="form-control"
                                   onblur="pesquisacep(this.value);" required>
                                  </div>
                                   <div class="form-group col-md-10">
                            <label for="rua">Logradouro</label>
                            <input name="rua" type="text" id="rua" class="form-control" required>
                          </div>
                            <div class="form-group col-md-2">
                            <label for="bairro">Bairro:</label>
                            <input name="bairro" type="text" id="bairro" class="form-control" required>
                          </div>
                            <div class="form-group col-md-2">
                            <label for="cidade">Cidade:</label> 
                            <input name="cidade" type="text" id="cidade" class="form-control" required>
                          </div>
                            <div class="form-group col-md-1">
                            <label for="uf">Estado:</label>
                            <input name="uf" type="text" id="uf" class="form-control" required>
                          </div>
                          <div class="form-group col-md-1">
                              <label for="numero">Número</label>
                              <input name="numero" type="text" id="numero" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="complemento">Complemento</label>
                                <input name="complemento" type="text" id="complemento" class="form-control" >
                              </div>
                            </div>
                            </fieldset>
                          </form>
                          </form>
                          <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
                  </form>
                  <br>
                  <footer class="py-3 bg-dark">
                    <div class="container">
                      <p class="m-0 text-center text-white">Copyright &copy; Vinapet 2019</p>
                    </div>
                  </footer>
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </script>
    </body>
   
</html>