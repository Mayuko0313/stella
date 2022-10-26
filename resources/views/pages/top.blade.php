@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="mens-logo">
<a class="navbar-mens" href="#"></a>
  <img src="{{ asset("images/mens.jpg") }}" alt="">
</div>

<div class="woman-logo">
    <a class="navbar-woman" href="#"></a>
    <img src="{{ asset("images/woman.jpg") }}" alt="">
</div>
</div>

{{-- <div class="p-hero">
    <img src="{{ asset("images/images.jpg") }}" alt="">
</div> --}}
@endsection
