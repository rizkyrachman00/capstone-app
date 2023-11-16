@extends('layouts.dash-admin')

@section('title')
    Kategori
@endsection

@section('breadcrumbs')
    {{-- resources/views/home.blade.php --}}
    {{ Breadcrumbs::render('kategori') }}
@endsection

@section('content')
    <p>Isi Kategori</p>
@endsection
