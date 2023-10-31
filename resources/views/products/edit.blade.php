@extends('layout.main')

@section('content')
    <h1 class="text-center m-5">Editar Producto <strong class="text-danger">{{ $product->id }}</strong></h1>
    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post">
        <div class="container">
            <div class="row justify-content-center">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="mb-3">
                        <input name="id" value="{{ $product->id }}" type="hidden" />
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            value="{{ $product->name }}">
                        @error('name')
                            <small class="danger" style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $product->description }}</textarea>
                        @error('description')
                            <small class="danger" style="color: red">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        @error('image')
                            <small class="danger" style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
                        <input name="price" value="{{ $product->price }}" type="number" class="form-control"
                            id="exampleFormControlInput1">
                        @error('price')
                            <small class="danger" style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Confirm
                        identity</button>
                </div>
            </div>
        </div>
    </form>
@endsection
