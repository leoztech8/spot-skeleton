@extends('layouts.app')

@section('content')
<example-component></example-component>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
