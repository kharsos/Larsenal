<!-- resources/views/client/components/header.blade.php -->
<header class="bg-dark text-white">
    <div class="container-fluid d-flex justify-content-between align-items-center py-2">
        <div class="logo">
            <a href="/" class="text-white text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" alt="L'Arsenal" style="height: 40px;">
            </a>
        </div>

        <div class="search-bar d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Rechercher..." style="width: 300px;">
            <button class="btn btn-secondary ms-2"><i class="bi bi-search"></i></button>
        </div>

        <div class="d-flex align-items-center">
            <a href="#" class="text-white text-decoration-none me-3">
                <span>Devise : €</span>
            </a>
            <a href="#" class="text-white text-decoration-none me-3">
                <i class="bi bi-person"></i> Connexion
            </a>
            <a href="#" class="text-white text-decoration-none">
                <i class="bi bi-cart"></i> Votre Panier 0,00 €
            </a>
        </div>

        <div class="language-flag ms-3">
            <img src="{{ asset('images/fr-flag.png') }}" alt="French" style="width: 30px;">
        </div>
    </div>
    <nav class="bg-secondary py-2">
        <div class="container-fluid">
            <ul class="nav justify-content-center">
                @foreach ($categories_with_products as $item)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="scaleDropdown{{ $loop->index }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $item['scale'] }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($item['categories'] as $category)
                                @foreach ($category->children as $subcategory)
                                    <li><a class="dropdown-item" href="#">{{ $subcategory->name }}</a></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
