@extends('layout.layout')

@section('title', 'HOME')

@section('conteudo')

    <header class="banner">

        <div>

            <h3>WR mestre de obras</h3>

            <h2>Construindo Sonhos e Criando Lares </h2>

            <h4>A sua visão é o nosso projeto. Com anos de experiência e expertise, WR Mestre de Construções é a escolha
                certa para tornar realidade a casa dos seus sonhos. Da fundação ao último acabamento, estamos aqui para
                transformar a sua ideia em uma realidade concreta.</h4>

        </div>

        <div>
            <ul>
                <li><a href="{{ url('sobre') }}" class="button">Sobre Nós</a></li>
                <li><a href="{{ url('portfolio') }}">Portfólio</a></li>
            </ul>

        </div>

    </header>

    <main>

        <section class="servico">

            <h2>Serviços Que Realizamos</h2>

            <div class="caixaServico site">
                <div>

                    <h3>Reforma de interiores</h3><span class="linhaServico"></span>

                    <h4>Reforma de interiores: planejamento, design, execução. Escolha de materiais e mobiliário para criar
                        ambientes funcionais e esteticamente agradáveis. Colaboração entre profissionais para transformar a
                        visão do cliente em realidade. Resultado: espaços renovados, conforto e satisfação.</h4>

                    <a href="">Saiba Mais</a>

                </div>

                <div>

                    <h3>Reforma de interiores</h3><span class="linhaServico"></span>

                    <h4>Reforma de interiores: planejamento, design, execução. Escolha de materiais e mobiliário para criar
                        ambientes funcionais e esteticamente agradáveis. Colaboração entre profissionais para transformar a
                        visão do cliente em realidade. Resultado: espaços renovados, conforto e satisfação.</h4>

                    <a href="">Saiba Mais</a>

                </div>

                <div>

                    <h3>Reforma de interiores</h3><span class="linhaServico"></span>

                    <h4>Reforma de interiores: planejamento, design, execução. Escolha de materiais e mobiliário para criar
                        ambientes funcionais e esteticamente agradáveis. Colaboração entre profissionais para transformar a
                        visão do cliente em realidade. Resultado: espaços renovados, conforto e satisfação.</h4>

                    <a href="">Saiba Mais</a>

                </div>

                <div>

                    <h3>Reforma de interiores</h3><span class="linhaServico"></span>

                    <h4>Reforma de interiores: planejamento, design, execução. Escolha de materiais e mobiliário para criar
                        ambientes funcionais e esteticamente agradáveis. Colaboração entre profissionais para transformar a
                        visão do cliente em realidade. Resultado: espaços renovados, conforto e satisfação.</h4>

                    <a href="">Saiba Mais</a>

                </div>

            </div>

        </section>

        <section class="sobre site">

            <div class="textosobre">

                <h2>Sobre nós!</h2>

                <h3>A WR Mestre de Obras, com mais de uma década de experiência, é especializada em construção e design de
                    interiores. Nosso compromisso é transformar visões em realidade, com foco no orçamento, prazos e
                    satisfação do cliente. Junte-se a nós na jornada de transformação de espaços, onde a qualidade é
                    fundamental.</h3>

                <a href="{{ url('sobre') }}" class="button">Saiba mais</a>

            </div>

            <div class="imgsobre">

                <div>
                    <img src="{{ asset('img/pedreiro1.svg') }}" alt="">
                    <img src="{{ asset('img/pedreiro2.svg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/pedreiro3.svg') }}" alt="">
                    <img src="{{ asset('img/pedreiro4.svg') }}" alt="">
                </div>


            </div>

        </section>

        <section class="orcamento site">

            <img src="{{ asset('img/logoexemplo.svg') }}" alt="">

            <div class="textoOrcamento">

                <h2>Descubra Por Que Escolher a <br><span>WR Mestre de Obras é a Melhor Decisão!</span></h2>

                <div>

                    <h3><i class="ri-check-line certo"></i>Soluções Sob Medida</h3>
                    <h3><i class="ri-check-line certo"></i>Orçamento e Prazos Garantidos</h3>
                    <h3><i class="ri-check-line certo"></i>Qualidade em Cada Detalhe</h3>

                </div>

                <a href="{{ url('portfolio') }}" class="button">Orçamento</a>

            </div>

        </section>

        <section class="depoimento">

            <h2>Satisfação Garantida <br><span>Transforme Seus Sonhos em Realidade com WR Mestre de Obras!</span></h2>

            <div class="carrosselDepoimento site">

                <div class="caixaDepoimento">
                    <div class="servicoDepoimento"><img src="{{ asset('img/reforma.svg') }}" alt="">
                        <h4>Reforma</h4>
                    </div>
                    <h3>A escolha da WR Mestre de Obras para a reforma da minha casa superou todas as expectativas.
                        Profissionalismo, cumprimento de prazos e qualidade excepcionais! Minha casa foi transformada de
                        acordo com meus sonhos, e estou extremamente satisfeito com o resultado.</h3>
                    <div class="clienteDepoimento">
                        <img src="{{ asset('img/boneco1.svg') }}" alt="">
                        <div>
                            <h5>Ralph Edwards</h5>
                            <h6>Cliente</h6>
                        </div>
                    </div>
                </div>

                <div class="caixaDepoimento">
                    <div class="servicoDepoimento"><img src="{{ asset('img/eletricidade.svg') }}" alt="">
                        <h4>Elétrica</h4>
                    </div>
                    <h3>A escolha da WR Mestre de Obras para a reforma da minha casa superou todas as expectativas.
                        Profissionalismo, cumprimento de prazos e qualidade excepcionais! Minha casa foi transformada de
                        acordo com meus sonhos, e estou extremamente satisfeito com o resultado.</h3>
                    <div class="clienteDepoimento">
                        <img src="{{ asset('img/boneco2.svg') }}" alt="">
                        <div>
                            <h5>Charolette Hanlin</h5>
                            <h6>Cliente</h6>
                        </div>
                    </div>
                </div>

                <div class="caixaDepoimento">
                    <div class="servicoDepoimento"><img src="{{ asset('img/reformageral.svg') }}" alt="">
                        <h4>Geral</h4>
                    </div>
                    <h3>A escolha da WR Mestre de Obras para a reforma da minha casa superou todas as expectativas.
                        Profissionalismo, cumprimento de prazos e qualidade excepcionais! Minha casa foi transformada de
                        acordo com meus sonhos, e estou extremamente satisfeito com o resultado.</h3>
                    <div class="clienteDepoimento">
                        <img src="{{ asset('img/boneco3.svg') }}" alt="">
                        <div>
                            <h5>Hellen Jummy</h5>
                            <h6>Cliente</h6>
                        </div>
                    </div>
                </div>

                <div class="caixaDepoimento">
                    <div class="servicoDepoimento"><img src="{{ asset('img/encanamento.svg') }}" alt="">
                        <h4>Encanamento</h4>
                    </div>
                    <h3>A escolha da WR Mestre de Obras para a reforma da minha casa superou todas as expectativas.
                        Profissionalismo, cumprimento de prazos e qualidade excepcionais! Minha casa foi transformada de
                        acordo com meus sonhos, e estou extremamente satisfeito com o resultado.</h3>
                    <div class="clienteDepoimento">
                        <img src="{{ asset('img/boneco4.svg') }}" alt="">
                        <div>
                            <h5>David Oshodi</h5>
                            <h6>Cliente</h6>
                        </div>
                    </div>
                </div>

                <div class="caixaDepoimento">
                    <div class="servicoDepoimento"><img src="{{ asset('img/pintura.svg') }}" alt="">
                        <h4>Pintura</h4>
                    </div>
                    <h3>A escolha da WR Mestre de Obras para a reforma da minha casa superou todas as expectativas.
                        Profissionalismo, cumprimento de prazos e qualidade excepcionais! Minha casa foi transformada de
                        acordo com meus sonhos, e estou extremamente satisfeito com o resultado.</h3>
                    <div class="clienteDepoimento">
                        <img src="{{ asset('img/boneco5.svg') }}" alt="">
                        <div>
                            <h5>Hellena John</h5>
                            <h6>Cliente</h6>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>

@endsection
