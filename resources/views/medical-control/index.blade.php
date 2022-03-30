@extends('layouts.app')

@section('template_title')
    Medical Control
@endsection

@section('content')
<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Indicadores de salud') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('people.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo indicador') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                            <div id="app">
                                <health-component></health-component>
                                <script src="{{ asset('js/app.js') }}"></script>
                                </div>
                             
                            </table>
                        </div>
                    </div>
                    
                </div> 
        </div>
    </div>
@endsection
