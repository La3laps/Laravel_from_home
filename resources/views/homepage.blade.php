<x-template>
    <x-slot name="title">Homepage</x-slot>
    <x-slot name="content">
        <div class="container d-flex flex-column align-items-center justify-content-center mt-5">
            <h1 class="font-weight-bolder fs-1">Homepage</h1>
            @if ($temperature >= 8)
                <span style="font-size: 40svh">🥵</span>
                <div class="container rounded d-flex justify-content-center align-items-center"
                    style="background-color: #212529">
                    <p class="text-light fs-1">C'est pas un temps à faire quoi que ce soit</p>
                </div>
            @elseif ($temperature >= 6)
                <span style="font-size: 40svh">🔥</span>
                <div class="container rounded d-flex justify-content-center align-items-center"
                    style="background-color: #212529">
                    <p class="text-light fs-1">C'est chaud, ça brûle</p>
                </div>
            @elseif ($temperature >= 4)
                <span style="font-size: 40svh">🍹</span>
                <div class="container rounded d-flex justify-content-center align-items-center"
                    style="background-color: #212529">
                    <p class="text-light fs-1">Il faut se rafraîchir</p>
                </div>
            @elseif ($temperature >= 2)
                <span style="font-size: 40svh">🌞</span>
                <div class="container rounded d-flex justify-content-center align-items-center"
                    style="background-color: #212529">
                    <p class="text-light fs-1">Y a-t-il moyen d'avoir un été correct ?</p>
                </div>
            @else
                <span style="font-size: 40svh">🌡️</span>
                <div class="container rounded d-flex justify-content-center align-items-center"
                    style="background-color: #212529">
                    <p class="text-light fs-1">Le mercure devient gazeux à cette temperature, non ?</p>
                </div>
            @endif
        </div>
    </x-slot>
</x-template>
