<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de HTML e CSS</title>
    
    <!-- Link para o arquivo de estilos CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Importa o JavaScript da biblioteca Splide para funcionalidade de slider/carrossel -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    
    <!-- Importa o CSS da biblioteca Splide para estilização do slider/carrossel -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include 'views/header.php'; ?>
        
        <section id="image-carousel" class="splide" aria-label="Carrossel de Imagens">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="./assets/img/pokemon.jpg" alt="Imagem de Pokémon">
                    </li>
                    <li class="splide__slide">
                        <img src="./assets/img/pokemon-mestre.jpg" alt="Imagem de Pokémon Mestre">
                    </li>
                </ul>
            </div>
        </section>
        
        <main>
            <section class="content">
                <div class="left">
                    <h2>Teste de HTML e CSS</h2>
                    <h4>Criterios de Avaliação:</h4>
                    <ul>
                        <li>Organização do código (quanto mais limpo melhor);</li>
                        <li>Nível de detalhamento (quanto mais idêntico melhor);</li>
                        <li>Tempo de desenvolvimento (seja honesto ao informar o tempo gasto);</li>
                    </ul>
                    <p>Após concluir o teste, envie o código compactado por e-mail, incluindo o tempo gasto e seu currículo anexado.</p>
                    <p>Agradecemos e desejamos boa sorte!</p>
                </div>
                <div class="right">
                    <div class="image-box-big">Imagem</div>
                </div>
            </section>
            
            <section class="highlight-boxes">
                <h2>Boxes de Destaque</h2>
                <div class="boxes">
                    <div class="box">
                        <div class="image-box">Imagem</div>
                        <a href="#">Texto descritivo com link</a>
                    </div>
                    <div class="box">
                        <div class="image-box">Imagem</div>
                        <a href="#">Texto descritivo com link</a>
                    </div>
                    <div class="box">
                        <div class="image-box">Imagem</div>
                        <a href="#">Texto descritivo com link</a>
                    </div>
                    <div class="box">
                        <div class="image-box">Imagem</div>
                        <a href="#">Texto descritivo com link</a>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include 'views/footer.php'; ?>
        
        <script src="js/script.js"></script>
    </div>
</body>

</html>
