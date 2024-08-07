<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #ffe4c4">
    <nav class="navbar navbar-light bg-dark navbar-expand-lg">
        <a class="navbar-brand text-light" href="/">
            🔥 ChaleurDT
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="text-light nav-link" href="/ChaleurDT/product">
                    Produit
                </a>
            </li>
            <li class="nav-item active">
                <a class="text-light nav-link" href="/ChaleurDT/cart">
                    Cart
                </a>
            </li>
            <li class="nav-item active">
                <a class="text-light nav-link" href="/ChaleurDT/product-table">
                    Tableau des produits
                </a>
            </li>
            <li class="nav-item active">
                <a class="text-light nav-link" href="/ChaleurDT/backoffice">
                    Backoffice
                </a>
            </li>
        </ul>
    </nav>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{ $content }}
</body>

</html>
