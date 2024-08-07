    <x-template>
        <x-slot name="title">Product List</x-slot>
        <x-slot name="content">
            <h1 class="text-center mt-5">Products' List</h1>
            <div class="container">
                <ul>
                    @foreach ($products as $key)
                        <li class="text-center m-4" style="list-style-type: none">{{ $key->id }}. {{ $key->name }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-slot>
    </x-template>
