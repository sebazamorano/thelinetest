@extends('layouts.app')

@section('content')
    <section class="background-form p-5">
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('form') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Nombre</label>
                    <input name="nombre" type="text" class="form-control  @error('nombre') is-invalid @enderror " id="validationDefault01" value="{{ old('nombre') }}" >
                    @error('nombre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Apellido</label>
                    <input name="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" id="validationDefault02" value="{{ old('apellido') }}">
                    @error('apellido')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Email</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="validationDefault03" >
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault05">Teléfono</label>
                    <input name="fono" type="tel" class="form-control @error('fono') is-invalid @enderror" value="{{ old('fono') }}"  id="validationDefault05">
                    @error('fono')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationDefault03">Consulta</label>
                    <textarea name="consulta" type="text" class="form-control  @error('consulta') is-invalid @enderror"  id="validationDefault03">{{ old('consulta') }}</textarea>
                    @error('consulta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </section>
@endsection
