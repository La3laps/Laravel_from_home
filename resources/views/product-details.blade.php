<x-template>
    <x-slot name="title">Product detail</x-slot>
    <x-slot name="content">

        <div class="container d-flex justify-content-center" style="margin-top: 20svh">
            <div class="card" style="width: 18rem;">
                <div class="card-img-top">
                    <img src="{{ $products[$id - 1]->PictureProduct }}" style="width: 100%" alt="img-produit">
                </div>
                <div class="card-body">
                    <h1>{{ $products[$id - 1]->name }}</h1>
                    {{ $products[$id - 1]->description }}
                </div>
            </div>
        </div>

    </x-slot>
</x-template>
