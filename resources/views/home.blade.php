@extends('layouts.app')

@section('content')
    <section class="background-transparent p-5">
    <h1>Consultoria IT</h1>
    <p class="lead">Apoyo experto para definir lineamientos estratégicos y tácticos en áreas de tecnología, procesos e información.</p>
    <p class="lead">
        <a href="{{ route('contacto') }}" class="btn btn-lg btn-warning fw-bold">Quiero saber más</a>
    </p>
    </section>
@endsection
