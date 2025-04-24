<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page de exemplo com formulário e apresentação de produtos ou serviços.">
    <title>Minha Landing Page Legal</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Bem-vindo à Minha Landing Page</h1>
        <p>Uma descrição curta e impactante do seu produto ou serviço.</p>
        <a href="#conteudo" class="botao">Saiba Mais</a>
    </header>
<main>
    <section id="conteudo">
        <h2>O que oferecemos</h2>
        <div class="cards">
            <div class="card">
                <h3>Produto/Serviço 1</h3>
                <p>Descrição do produto/serviço 1.</p>
            </div>
            <div class="card">
                <h3>Produto/Serviço 2</h3>
                <p>Descrição do produto/serviço 2.</p>
            </div>
            <div class="card">
                <h3>Produto/Serviço 3</h3>
                <p>Descrição do produto/serviço 3.</p>
            </div>
        </div>

        <form action="processar_formulario.php" method="post" class="formulario-contato">
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome" required>
            </div>
            <div class="form-grupo">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Seu e-mail" required>
            </div>
            <div class="form-grupo">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem" required></textarea>
            </div>
            <button type="submit" class="botao-enviar">Enviar</button>
        </form>
    </section>

<main>

    <footer>
        <p>&copy; 2024 Minha Landing Page. Todos os direitos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
