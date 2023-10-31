@extends('layout.main')

@section('content')
    <h1 class="text-center m-5">Crear un nuevo producto </h1>
    <form action="" method="post">
        <div class="container">
            <div class="row justify-content-center">


                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" value="{{ old('name') }}">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>



            </div>
        </div>
    </form>
@endsection
