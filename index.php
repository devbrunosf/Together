<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/style.css">
    <title>Together</title>
</head>

<body>
    <!-- Página home do site com menu de navegação (header), 3 degraus (step1, step 2 e aside) e footer -->
    <header>
        <!-- Header com div.a para logo ou nome do projeto, e ul.li*3 para menu de navegação -->
        <div id="logo"><a href="index.php">Together</a></div><!-- Espaço para Logo ou nome do projeto -->
        <p class="hamburguer"><i>&equiv;</i></p> <!-- Ícone Hamburguer -->
        <ul>
            <!-- Menu de navegação com ul.li*3 -->
            <?php
            session_start(); // Iniciar sessão...

            if (empty($_SESSION["email"])) { // Se o email estiver vazio, mostra menu para usuários não logados...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else { // Se tiver preenchido mostra menu com nome do usuário...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo "<li><a href='perfil.php'> Olá " . $_SESSION["nome"] . "</a></li>";
                echo "<li><a href='php/logout.php'> Logout </a></li>";
            }
            ?>
        </ul>
    </header>

    <section class="step1">
        <!-- Primeiro 'degrau' do site, area para busca de projetos -->
        <div class="container">
            <div>
                <p>Busque aqui por diversos projetos em sua área!</p>
                <form action="buscar_projetos.php" method="POST">
                    <input type="text" name="projeto" placeholder="Ex.: HTML, CSS, PHP..." required>
                    <label for="projetos"><i class="fas fa-code"></i></label>
                    <input id="projetos" type="submit" value=" ">
                </form>
            </div>
        </div>
    </section>

    <!-- 
    <section class="step2">
        -->
    <!-- Segundo 'degrau' do site, area para encontrar parceiros
        <div class="container">
            <div>
                <p>Encontre o Parceiro ideal para seus projetos!</p>
                <form action="buscar_parceiros.php">
                    <input type="text" name="parceiro" placeholder="Ex.: Front-End, Back-End..." required>
                    <label for="parceiros"><i class="fas fa-search"></i></label>
                    <input id="parceiros" type="submit" value=" ">
                </form>
            </div>
        </div>
    </section>
    -->

    <section class="step2">
        <div class="cards">
            <div>
                <figure id="img"><img src="img/1111935.png" alt=""></figure>
                <span>4 dias atras</span>
                <h1>Lorem Ipsum</h1>
                <p>Temporibus, deserunt fugiat? Modi, culpa, eligendi harum ipsam fugiat magni doloribus veritatis esse labore voluptatum, quia ratione. Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                <a>Read More</a>
            </div>
            <div>
                <figure id="img"><img src="img/wp1828900.png" alt=""></figure>
                <span>7 dias atras</span>
                <h1>Consectetur, modi?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea alias nam praesentium fuga libero quos minus, veniam natus facere a repellat ipsa asperiores consectetur facilis.  </p>
                <a>Read More</a>
            </div>
            <div>
                <figure id="img"><img src="img/wp3355331.png" alt=""></figure>
                <span>2 dias atras</span>
                <h1>Amet Adipisicing</h1>
                <p>Eius, quas. Aperiam, repudiandae libero veritatis iure necessitatibus tempora, tempore ipsa corporis eius natus, placeat et non. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a>Read More</a>
            </div>
        </div>
    </section>


    <aside id="aside">
        <!-- Terceiro 'degrau' (aside), area com breve descrição do projeto -->
        <div class="container">
            <div>
                <p>Nossa plataforma busca reunir programadores de diferentes areas para que juntos possam desenvolver um mesmo projeto.</p>
            </div>
        </div>
    </aside>

    <footer>
        <!-- Footer -->
        <div>
            <p>Projeto Desenvolvido para Trabalhos Avaliativos de:</p>
            <p>Design de Interface I,</p>
            <p>Linguagem de Programação para WEB.</p><br>
            <p>&copy; Bruno Freitas 2021/1</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/style.css">
    <title>Together</title>
</head>

<body>
    <!-- Página home do site com menu de navegação (header), 3 degraus (step1, step 2 e aside) e footer -->
    <header>
        <!-- Header com div.a para logo ou nome do projeto, e ul.li*3 para menu de navegação -->
        <div id="logo"><a href="index.php">Together</a></div><!-- Espaço para Logo ou nome do projeto -->
        <p class="hamburguer"><i>&equiv;</i></p> <!-- Ícone Hamburguer -->
        <ul>
            <!-- Menu de navegação com ul.li*3 -->
            <?php
            session_start(); // Iniciar sessão...

            if (empty($_SESSION["email"])) { // Se o email estiver vazio, mostra menu para usuários não logados...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else { // Se tiver preenchido mostra menu com nome do usuário...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo "<li><a href='perfil.php'> Olá " . $_SESSION["nome"] . "</a></li>";
                echo "<li><a href='php/logout.php'> Logout </a></li>";
            }
            ?>
        </ul>
    </header>

    <section class="step1">
        <!-- Primeiro 'degrau' do site, area para busca de projetos -->
        <div class="container">
            <div>
                <p>Busque aqui por diversos projetos em sua área!</p>
                <form action="buscar_projetos.php" method="POST">
                    <input type="text" name="projeto" placeholder="Ex.: HTML, CSS, PHP..." required>
                    <label for="projetos"><i class="fas fa-code"></i></label>
                    <input id="projetos" type="submit" value=" ">
                </form>
            </div>
        </div>
    </section>

    <!-- 
    <section class="step2">
        -->
    <!-- Segundo 'degrau' do site, area para encontrar parceiros
        <div class="container">
            <div>
                <p>Encontre o Parceiro ideal para seus projetos!</p>
                <form action="buscar_parceiros.php">
                    <input type="text" name="parceiro" placeholder="Ex.: Front-End, Back-End..." required>
                    <label for="parceiros"><i class="fas fa-search"></i></label>
                    <input id="parceiros" type="submit" value=" ">
                </form>
            </div>
        </div>
    </section>
    -->

    <section class="step2">
        <div class="cards">
            <div>
                <figure id="img"><img src="img/1111935.png" alt=""></figure>
                <span>4 dias atras</span>
                <h1>Lorem Ipsum</h1>
                <p>Temporibus, deserunt fugiat? Modi, culpa, eligendi harum ipsam fugiat magni doloribus veritatis esse labore voluptatum, quia ratione. Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                <a>Read More</a>
            </div>
            <div>
                <figure id="img"><img src="img/wp1828900.png" alt=""></figure>
                <span>7 dias atras</span>
                <h1>Consectetur, modi?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea alias nam praesentium fuga libero quos minus, veniam natus facere a repellat ipsa asperiores consectetur facilis.  </p>
                <a>Read More</a>
            </div>
            <div>
                <figure id="img"><img src="img/wp3355331.png" alt=""></figure>
                <span>2 dias atras</span>
                <h1>Amet Adipisicing</h1>
                <p>Eius, quas. Aperiam, repudiandae libero veritatis iure necessitatibus tempora, tempore ipsa corporis eius natus, placeat et non. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a>Read More</a>
            </div>
        </div>
    </section>


    <aside id="aside">
        <!-- Terceiro 'degrau' (aside), area com breve descrição do projeto -->
        <div class="container">
            <div>
                <p>Nossa plataforma busca reunir programadores de diferentes areas para que juntos possam desenvolver um mesmo projeto.</p>
            </div>
        </div>
    </aside>

    <footer>
        <!-- Footer -->
        <div>
            <p>Projeto Desenvolvido para Trabalhos Avaliativos de:</p>
            <p>Design de Interface I,</p>
            <p>Linguagem de Programação para WEB.</p><br>
            <p>&copy; Bruno Freitas 2021/1</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>