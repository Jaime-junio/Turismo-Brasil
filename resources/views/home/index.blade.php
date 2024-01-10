<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <title>{{ $titulo }}</title>
</head>
<body>
    <header>
        <div class="titulo">
        <h1>Bem Vindo(a)! a Turismo Brazil </h1>
    </div>
    </header>

<main>
    <h2>Sobre a Turismo Brasil</h2>
<p><strong>Turismo Brasil é uma empresa de turismo que foi criada por um jovem apaixonado por cultura e turismo cujo seu nome é Robert Rodrigues</strong>
    que queria levar seu conhecimento para o mundo, pois ja tinha visitado diversos lugares incriveis e queria compartilhar
    sua experiência para que outras pessoas pudessem viver experiências unicas assim como ele, Robert criou o site da empresa em 
    <i>1973</i> bem mais simples do que está nos dias atuais porem bem funcional e atendendo a proposta da empresa, somos uma empresa 100% online,
    trabalhamos muito com pesquisas e feeadbacks de viagens para sempre estar atualizando nossa pagina e 
    com isso está sempre inovando e trazendo cada vez mais lugares maravilhosos para os milhares de apaixonados por cultura e turismo.</p>


    <h2>Aqui você encontra os melhores lugares para explorar. </h2>
<p> Com nossas pequisas dicas e feedbacks garantimos que você viverá a melhor experiência da sua vida
    visitantdo qualquer um dos locais abaixo.
</p>

<div class="paralax">
    <div class="card acre">
        <h3><a href="{{ route('acre') }}">ACRE</a></h3>
    </div>
    <div class="card alagoas">
        <h3><a href="{{ route('alagoas') }}">Alagoas</a></h3>
    </div>
</div>
</main>

    <footer>
        &copy; Todos os direitos reservados - Turismo Brazil 
    </footer>


</body>
</html>
