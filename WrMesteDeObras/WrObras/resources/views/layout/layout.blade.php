<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - WR Mestre de Obras</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
        integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <nav class="topo site">

        <h1>logo</h1>

        <ul class="paginas">
            <li><a href="{{ url('/') }}">Home</a></li><span class="linha"></span>
            <li><a href="{{ url('servico') }}">Serviço</a></li><span class="linha"></span>
            <li><a href="{{ url('sobre') }}">Sobre</a></li><span class="linha"></span>
            <li><a href="{{ url('portfolio') }}">Portfólio</a></li>
        </ul>

        <li><a href="{{ url('contato') }}" class="button">Contato</a></li>

    </nav>


    <main class="container">

        @yield('conteudo')

    </main>


    <footer>

        <div class="rodape">

            <div>

                <img src="{{ asset('img/logoRodape.svg') }}" alt="">
                <p>WR Mestre de Obras: Transformando sonhos em realidade. Com décadas de experiência em construção e
                    design de interiores, sua satisfação é nossa prioridade</p>

            </div>

            <span></span>

            <div class="paginasRodape"">

                <h2>Páginas</h2>

                <hr>

                <ul class="">
                    <li><a href="{{ url('/') }}">Home</a></li><span class="linha"></span>
                    <li><a href="{{ url('servico') }}">Serviço</a></li><span class="linha"></span>
                    <li><a href="{{ url('sobre') }}">Sobre</a></li><span class="linha"></span>
                    <li><a href="{{ url('portfolio') }}">Portfólio</a></li>
                </ul>

            </div>

            <span></span>

            <div class="rede-social">

                <ul>
                    <li><a href="#">linkedin</a></li>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">whatsapp</a></li>
                    <li><a href="#">twitter</a></li>
                </ul>

            </div>

        </div>

        <div class="direitosReservados">

            <h3>copyright @ 2023</h3>

            <h3>Cyber Company</h3>

        </div>

    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>

    <script src="{{ asset('js/animacoes.js') }}"></script>

</body>

</html>
