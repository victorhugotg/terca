<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: car.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EletroTere</title>
  <link rel="stylesheet" href="./css-responsivo/menu-toggle.css">
  <link href="estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
<header>
    <div class="header-container">
      <div class="logo">
        <h1 class="logo-type">Eletro<span>mania</span></h1>
      </div>
      <div class="search-cart">
        <div class="search-bar">
          <input type="text" placeholder="Pesquisar produtos">
          <button class="search-button">Pesquisar</button>
        </div>
        <div class="icons">
          <a href="login.php" class="account-link">Login</a>
          <a href="car.php" class="cart-icon">
            <img src="./icons/cart.png" alt="Carrinho de Compras">
          </a>
        </div>
      </div>
    </div>
    <nav class="nav-container">
      <ul class="nav-list">
      <li><a href="index.html"><i class="fas fa-home"></i>&nbsp;Início</a></li>
                <li><a href="produtos.html"><i class="fas fa-mobile-alt"></i>&nbsp;Produtos</a></li>
        <li class="categories">
          <a href="#"><i class="fas fa-bars" style="margin-right: 5px;"></i> Categorias</a>
          <ul class="sub-menu">
            <li><a href="perifericos.html">Periféricos</a></li>
            <li><a href="eletrodos.html">Eletrodomésticos</a></li>
            <li><a href="games.html">Games</a></li>
          </ul>
        </li>
        
        <li><a href="supo.html"><i class="fas fa-headset"></i>&nbsp;Redes Sociais</a></li>
      </ul>
    </nav>
  </header>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>