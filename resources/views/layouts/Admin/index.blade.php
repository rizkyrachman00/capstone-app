@extends('layouts.Admin.dashboard')

@section('title')
    Dashboard Admin
@endsection

@section('breadcrumbs')
    {{-- resources/views/home.blade.php --}}
    {{ Breadcrumbs::render('dashboard') }}
@endsection

@section('content')
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, omnis laudantium! Ullam consequuntur molestias
        nemo, nesciunt vitae laudantium, quisquam quam soluta dolorem voluptatibus unde voluptate, sequi amet repudiandae
        nostrum asperiores.</p>
@endsection
