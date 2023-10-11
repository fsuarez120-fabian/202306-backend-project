@extends('layout.main')

@section('content')
    <h1 class="text-center m-5">Detalle del producto </h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="img/producto1.png" class="img-fluid">
            </div>
            <div class="col-md-4">
                <h1>nombre del produto</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique repellendus commodi ipsam, eligendi,
                    quae est amet alias dignissimos minus minima libero, consequuntur doloribus nobis. Quia voluptatum
                    quisquam ab repudiandae minima.</p>
                <h3>$ 1.250.026</h3>
                <button type="button" class="btn my-background">Añadir a Carrito</button>
            </div>
        </div>
    </div>
@endsection
