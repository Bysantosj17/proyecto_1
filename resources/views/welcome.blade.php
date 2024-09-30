{{--  @component('components.layout')  --}}
{{--  <h1><strong>Inicio</strong></h1>  --}}
{{--  @endcomponent  --}}
{{--  <x-slot name="title">
    Home Title
    <p>hola</p>
</x-slot>  --}}
<x-layouts.app title="Home" meta-description="Home meta description">
    <h1 class="text-primary text-center">Home</h1>
    @auth
        <div class="text-white"> Usuario autenticado:
            {{ Auth::user()->name }}
        </div>
    @endauth
</x-layouts.app>
