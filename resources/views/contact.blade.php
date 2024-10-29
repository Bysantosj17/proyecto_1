{{--  @extends('layouts.app')

@section('title', 'Contacto')
@section('meta-description', 'contact meta description')

@section('content')
    <h1><strong>Contacto</strong></h1>
@endsection  --}}
<x-layouts.app
    title="Contact"
    meta-description="Contact meta description"
>

    <h1 class="text-primary text-center mt-4 mb-4 ">
        Contacto
    </h1>

    <div class="container">
        <div class="row align-item-center ">
                <form action="">
                    <div class="row align-self-start justify-content-center">
                        <div class="col-12 col-md-4 col-lg-3 col-xxl-2 mb-4">
                            <label>
                                <input type="text"  value="Nombre">
                            </label>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3 col-xxl-2  ">
                            <div class="">
                                <label>
                                    <input type="tel" value="Numero de telefono">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row align-self-start justify-content-center mt-4">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                            <label>
                                <input type="email" value="Correo electronico">
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-start justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                            <label class="pt-3">
                                Mensaje: <br>
                                <textarea class="mt-2" cols="24">

                                </textarea>
                            </label>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</x-layouts.app>

{{--  <div class="container">
    <h1 class="text-primary text-center mt-4 mb-4 ">
        Contacto
    </h1>
    <div class="row align-item-center ">
        <div class="col">
            <form action="">
                <div class="row justify-content-center">
                    <div class=" mb-4 col-12 col-md-2 col-lg-1">
                        <label>
                            <input type="text"  value="Nombre">
                        </label>
                    </div>

                    <div class="col-12 offset-md-3 offset-lg-2 col-md-2 col-lg-1">
                        <label>
                            <input type="tel" value="Numero de telefono">
                        </label>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-8">
                        <label>
                            <input type="email" value="Correo electronico">
                        </label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-8">
                        <label class="pt-3">
                            Mensaje: <br>
                            <textarea cols="24">

                            </textarea>
                        </label>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>  --}}
