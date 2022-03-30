@extends('layouts.app')

@section('template_title')
    Role
@endsection

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reportes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Generar un nuevo reporte') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div id="app">
                                <reports-component></reports-component>
                                <script type ="json/javascript" src="{{ asset('js/app.js') }}"></script>
                             </div>
                    </div>
                </div>
                {!! $roles->links() !!}
        </div>
    </div>
@endsection
