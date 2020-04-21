@extends('layouts.app')

@section('content')
    <!-- <div class="row">
        <div class="col-md-12">
            <h3>Categorias</h3>
        </div>
    </div> -->




<!--
    <div class="row" style="margin-top:20px">
        <div class="col-sm-12">
            <h3>Recomendações</h3>
        </div>
    </div> -->

    {{-- Destaques --}}
    <div class="row layout_index">

        <!-- titulo -->
        <div class="col-sm-12" style="margin-top:-3rem;">
            <h1 class="title">Destaques</h1>
        </div>
        <!--x titulo x-->

        <div class="col-sm-12">
            <div class="row justify-content-center">
                <!-- voltar -->
                <div class="col-sm-1">
                    <img class="carousel-control-prev" id="slideCategoriaVoltar" href="#carouselExampleControls" role="button" data-slide="prev" src="{{asset('icones/voltar_azul_icone.svg')}}">
                </div>

                    <div class="col-sm-10">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('slides/aviso_1.png')}}" class="d-block w-100"  alt="Primeiro Slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_2.png')}}" class="d-block w-100"  alt="Segundo Slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_3.png')}}" class="d-block w-100" alt="Terceiro Slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_4.png')}}" class="d-block w-100" alt="Terceiro Slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_5.jpg')}}" class="d-block w-100" alt="Terceiro Slide" >
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_6.png')}}" class="d-block w-100" alt="Terceiro Slide" >
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('slides/aviso_7.png')}}" class="d-block w-100" alt="Terceiro Slide" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- proximo -->
                <div class="col-sm-1">
                    <img class="carousel-control-next" id="slideCategoriaProxima" href="#carouselExampleControls" role="button" data-slide="next" src="{{asset('icones/proximo_azul_icone.svg')}}">
                </div>
            </div>
        </div>
    </div>


    {{-- @include('layouts.slideCategoria') --}}


    {{-- É Gratuito --}}
    <div class="row layout_index d-flex justify-content-between">
        <div class="col-sm-6">
            <h1 class="title">É gratuito!</h1>
            <p class="paragraph">
                O Cadastro é completamente <strong>gratuito</strong> e passa
                por uma rápida avaliação, em que são verificados 
                os dados cadastrados, e em seguida, liberado
                para acesso ao público.
            </p>
        </div>

        <div class="col-sm-6 justify-content-center">
            <img class="image" id="img-e_gratuito" src="{{asset('icones/gratuito_icone.svg')}}" alt="">
        </div>
    </div>

    {{-- Aumente suas vendas --}}
    <div class="row layout_index d-flex justify-content-between">
        <div class="col-sm-6" style="text-align: center; margin-top: 14px;">
            <img id="img-left" class="image" src="{{asset('icones/grafico_icone.svg')}}" alt="">
        </div>
        <div class="col-sm-6">
            <h1 class="title">Aumente suas vendas</h1>
            <p class="paragraph">
                Disponibilizar informações sobre seu estabelecimento ou prestação de serviço nesta plataforma ampliam as possibilidades de serem localizados em buscas realizadas na internet ou de que consumidores, por meio de seu cadastro, lhe contactarem para a compra de produtos ou contratação de serviços.
            </p>
        </div>

        <div id="img-right" class="col-sm-4">
            <img class="image" src="{{asset('icones/grafico_icone.svg')}}" alt="">
        </div>
    </div>

    {{-- Categorias --}}
    <div class="row layout_index d-flex justify-content-between">
        <div class="col-sm-6">
            <h1 class="title">Categorias</h1>
            <p class="paragraph">
                Nossa lista de categorias vem sendo atualizada
                de acordo com a necessidade. Caso queira sugerir alguma
                categoria é só entrar em contato por e-mail ou através das
                nossas redes sociais
            </p>
            <div class="row justify-content-center">
                <a href="{{route('categoria.list')}}" class="btn btn-index btn-lg">
                    Ver todas as Categorias
                </a>
            </div>
        </div>

        <div class="col-sm-6">
            <img class="image" id="img-categori" src="{{asset('icones/categorias_icone.png')}}" alt="">
        </div>
    </div>

    {{-- Que tal cadastrar o seu negócio? --}}
    <div class="row layout_index d-flex justify-content-between">
        <div class="col-sm-4">
            <img id="img-leftB" class="image" src="{{asset('icones/cadastrar_negocio_icone.svg')}}" alt="">
        </div>
        <div class="col-sm-6">
            <h1 class="title">Que tal cadastrar o seu negócio?</h1>
            <p class="paragraph">
                O Cadastro é completamente <strong>gratuito</strong> e passa
                por uma rápida avaliação, em que são verificados 
                os dados cadastrados, e em seguida, liberado
                para acesso ao público.
            </p>
            <div class="row justify-content-center">
                <a href="{{route('estabelecimento.create')}}" class="btn btn-index btn-lg">
                    Cadastre-se
                </a>
            </div>
        </div>

        <div id="img-right" class="col-sm-4">
            <img class="image" src="{{asset('icones/cadastrar_negocio_icone.svg')}}" alt="">
        </div>
        
    </div>


@endsection
