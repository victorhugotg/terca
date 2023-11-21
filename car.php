<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

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
  <main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
      <section>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Total</th>
              <th>-</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product">
                <img src="imagens/rotr.PNG" alt="Produto 3">
                  <div class="info">
                    <div class="name"><h3>Rise of the Tomb Raider - Xbox One</h3></div>
                    <div class="category">Games</div>
                  </div>
                </div>
              </td>
              <td>R$ 193</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 193</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <!--<tr>
              <td>
                <div class="product">
                  <img src="https://picsum.photos/100/120" alt="" />
                  <div class="info">
                    <div class="name">Nome do produto</div>
                    <div class="category">Categoria</div>
                  </div>
                </div>
              </td>
              <td>R$ 120</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>2</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 240</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>-->
            <tr>
              <td>
                <div class="product">
                <img src="./imagens/gel.PNG" alt="Produto 1">
                  <div class="info">
                    <div class="name"><h3>Geladeira Gamer Consul Frost Free Duplex 397 litros Evox com freezer embaixo - CRE44BK</h3></div>
                    <div class="category">Eletrodomésticos</div>
                  </div>
                </div>
              </td>
              <td>R$3399.99</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$3399.99</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
      <aside>
        <div class="box">
          <header>Resumo da compra</header>
          <div class="info">
            <div><span>Sub-total</span><span>R$ 3592,99 </span></div>
            <div><span>Frete</span><span>Gratuito</span></div>
            <div>
              <button>
                Adicionar cupom de desconto
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>
          <footer>
            <span>Total</span>
            <span>R$ 3592,99</span>
          </footer>
        </div>
        <button>Finalizar Compra</button>
      </aside>
    </div>
  </main>
</body>
<footer>
  <p>&copy; 2023 Eletromania - Todos os direitos reservados.</p>
</footer>

</html>