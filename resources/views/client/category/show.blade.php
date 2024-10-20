




@extends('client.layouts.app')
@section('content')

<div class="container">
    <h2 class="my-4">Subcategories for {{ $main_category->name }}</h2>

    <div class="row">
        @foreach ($main_category->children as $subcategory)
            <div class="col-md-4 mb-4"> <!-- Adjust the column size as needed -->
                <div class="card h-100">
                    <img src="{{ asset('path/to/your/image/directory/' . $subcategory->image) }}" class="card-img-top" alt="{{ $subcategory->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $subcategory->name }}</h5>

                        <!-- Display products associated with the subcategory -->
                        @foreach ($subcategory->products as $product)
                            <div class="product">
                                <h6>{{ $product->name }}</h6>
                                <!-- <p><strong>Échelle:</strong> {{ $product->scale }}</p> -->
                                <p><strong>Prix:</strong> {{ number_format($product->price, 2) }} €</p>
                                <p><strong>Description:</strong> {{ $product->description }}</p>
                                <a href="" class="btn btn-primary">Détails</a>
                                <a href="" class="btn btn-success">Acheter</a>
                            </div>
                            <hr> <!-- Add a line between products -->
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection



