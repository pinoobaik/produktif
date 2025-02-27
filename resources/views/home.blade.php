@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2>Selamat Datang, {{ $nama }}</h2>
    
    <h3>Mata Kuliah yang Diambil:</h3>
    <ul>
        @foreach($mata_kuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
@endsection
