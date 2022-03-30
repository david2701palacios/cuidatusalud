@extends('layouts.app')

@section('content')
        <div id="app">
            <login-component></login-component>
            <script type="json/javascript" src="{{ asset('js/app.js') }}"></script>
        </div>
@endsection
