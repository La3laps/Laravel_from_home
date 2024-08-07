<x-template>
    <x-slot name="title">Products</x-slot>
    <x-slot name="content">
        <div class="row align-items-center justify-content-center gap-5" style="margin-top: 10svh;">
            <div class="container d-flex align-items-center justify-content-center">
                <form action="/ChaleurDT/product-table/ByName" method="post">
                    {{ csrf_field() }}
                    <input class="button btn btn-warning mx-5" type="submit" name="productsByName" value="productsByName">
                </form>
                <form action="/ChaleurDT/product-table/ByPrice" method="post">
                    {{ csrf_field() }}
                    <input class="button btn btn-warning  mx-5" type="submit" name="productsByPrice"
                        value="productsByPrice">
                </form>
            </div>

            @foreach ($products as $key)
                <div class="card col-6" style="height: 15svw; width: 15svw">
                    <a href="/product/{{ $key->id }}" style="height: 100%; padding: 0; text-decoration: none;">
                        <div class="card-body" style="15%; ">
                            <h1 class="text-center " style="color: #212529;font-size: 12px">{{ $key->name }}</h1>
                        </div>
                        <img src="{{ $key->PictureProduct }}" alt="pas encore d'image en database" class="card-img-top"
                            style="width: 100%; height: 8svw; object-fit: fill">
                        <div class="card-body" style="background-color: #212529">
                            <h2 class="text-light fs-5">{{ $key->price }}.00€</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </x-slot>
</x-template>
