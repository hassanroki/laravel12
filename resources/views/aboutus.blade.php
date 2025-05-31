@extends('layouts.app')
@section('styles')
    <style>
        h2 {
            text-align: center;
            font-size: 36px;
        }
    </style>
@endsection



@section('content')
    <div class="container">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <p>My Name: {{ $name }}</p>
        <p>ID: {{ $id }}</p>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
