{{-- resources/views/client/home.blade.php --}}

@extends('client.layouts.app')

@section('content')
<div class="container">
    <h1>L'Arsenal, le spécialiste français de la maquette navale</h1>
    <p class="mt-4">
        🌟 <strong>Bienvenue dans notre nouvelle aventure au Maroc !</strong> 🌟
    </p>

    <p>
        Chers clients,
    </p>

    <p>
        Nous sommes ravis de vous annoncer que notre entreprise a déménagé au cœur du magnifique Maroc ! Ce changement marque le début d'une nouvelle ère pour nous, et nous sommes plus déterminés que jamais à vous offrir des maquettes de la plus haute qualité.
    </p>

    <p>
        Nous sommes heureux de vous informer que tout est désormais en ordre et que notre équipe est prête à répondre à toutes vos attentes. Grâce à notre nouvelle localisation, nous avons amélioré notre logistique et notre production.
    </p>

    <p>
        Et ce n'est pas tout ! À partir de novembre, préparez-vous à découvrir de belles nouveautés qui viendront enrichir notre gamme. Que vous soyez un passionné de modélisme ou à la recherche d'un cadeau unique, nous avons ce qu'il vous faut !
    </p>

    <p>
        N'hésitez pas à passer vos commandes ! Chaque maquette que nous fabriquons est le fruit de notre passion et de notre engagement envers vous.
    </p>

    <p>
        Merci encore pour votre confiance. Ensemble, construisons de belles maquettes et de merveilleux souvenirs !
    </p>

    <h2 class="mt-5">NOUVEAUTES</h2>

    {{-- Section for displaying new products --}}
        <div id="new-products" class="row mt-3">
            @foreach ($newProducts as $product)
                <div class="col-md-12 mb-4 text-center"> {{-- Adjust to col-md-6 for two products per row --}}
                    <div class="card">
                        {{-- Make sure the file extension matches your actual file extension --}}
                        <img src="{{ asset('images/products/'.$product->id.'.jpg') }}" 
                            alt="{{ $product->name }}" 
                            class="card-img-top mx-auto d-block" 
                            style="width: 30%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>{{ number_format($product->price, 2, ',', ' ') }} €</strong></p>
                            <a href="#" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


</div>
@endsection
