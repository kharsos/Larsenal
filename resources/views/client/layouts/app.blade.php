<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Arsenal - E-commerce</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
    <!-- In resources/views/layouts/app.blade.php -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <!-- Include the header component -->
     <header>
    @include('client.components.header')
    </header>
    
    
    <div class="container-fluid d-flex flex-grow-1 p-0" style="height: calc(100vh - 56px);"> 
        <!-- Sidebar Section (20% width) -->
        <div class="d-flex flex-column bg-dark col-2 vh-100 position-sticky" style="top: 0;">
            @include('client.components.sidebar')
        </div>

        <!-- Main Content Section (80% width) -->
        <div class="col-10 p-3" style="margin-left: 0%;">
            <main class="content" style="overflow-y: auto; height: 100vh;">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
