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
    <div class="card amapa">
        <h3><a href="{{ route('amapa') }}">Amapá</a></h3>
    </div>
    <div class="card amazonas">
        <h3><a href="{{ route('amazonas') }}">Amazonas</a></h3>
    </div>
    <div class="card bahia">
        <h3><a href="{{ route('bahia') }}">Bahia</a></h3>
    </div>
    <div class="card ceara">
        <h3><a href="{{ route('ceara') }}">Ceará</a></h3>
    </div>
    <div class="card espirito-santo">
        <h3><a href="{{ route('espiritoSanto') }}">Espirito Santo</a></h3>
    </div>
    <div class="card goias">
        <h3><a href="{{ route('goias') }}">Goias</a></h3>
    </div>
    <div class="card maranhao">
        <h3><a href="{{ route('maranhao') }}">Maranhao</a></h3>
    </div>
    <div class="card mato-grosso">
        <h3><a href="{{ route('matoGrosso') }}">Mato Grosso</a></h3>
    </div>
    <div class="card mato-grosso-do-sul">
        <h3><a href="{{ route('matoGrossoDoSul') }}">Mato Grosso Do Sul</a></h3>
    </div>
    <div class="card minas-gerais">
        <h3><a href="{{ route('minasGerais') }}">Minas Gerais</a></h3>
    </div>
    <div class="card para">
        <h3><a href="{{ route('para') }}">Para</a></h3>
    </div>
    <div class="card paraiba">
        <h3><a href="{{ route('paraiba') }}">Paraiba</a></h3>
    </div>
    <div class="card parana">
        <h3><a href="{{ route('parana') }}">Parana</a></h3>
    </div>
    <div class="card pernambuco">
        <h3><a href="{{ route('pernambuco') }}">Pernambuco</a></h3>
    </div>
    <div class="card piaui">
        <h3><a href="{{ route('piaui') }}">Piaui</a></h3>
    </div>
    <div class="card rio-de-janeiro">
        <h3><a href="{{ route('rioDeJaneiro') }}">Rio De Janeiro</a></h3>
    </div>
    <div class="card rio-grande-do-sul">
        <h3><a href="{{ route('rioGrandeDoSul') }}">Rio Grande Do Sul</a></h3>
    </div>
    <div class="card rio-grande-do-norte">
        <h3><a href="{{ route('rioGrandeDoNorte') }}">Rio Grande Do Norte</a></h3>
    </div>
    <div class="card rondonia">
        <h3><a href="{{ route('rondonia') }}">Rondonia</a></h3>
    </div>
    <div class="card roraima">
        <h3><a href="{{ route('roraima') }}">Roraima</a></h3>
    </div>
    <div class="card santa-catarina">
        <h3><a href="{{ route('santaCatarina') }}">Santa Catarina</a></h3>
    </div>
    <div class="card sao-paulo">
        <h3><a href="{{ route('saoPaulo') }}">São Paulo</a></h3>
    </div>
    <div class="card sergipe">
        <h3><a href="{{ route('sergipe') }}">Sergipe</a></h3>
    </div>
    <div class="card tocantins">
        <h3><a href="{{ route('tocantins') }}">Tocantins</a></h3>
    </div>
    <div class="card distrito-federal">
        <h3><a href="{{ route('distrito') }}">Distrito Federal</a></h3>
    </div>
</div>
</main>

    <footer>
        &copy; Todos os direitos reservados - Turismo Brazil 
    </footer>


</body>
</html>
