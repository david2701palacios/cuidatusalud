@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (sizeof(Auth::user()->persons)==0)
                    <div class="alert alert-success" role="alert">
                        ¡Hola! Para conocerte mejor necesitamos que actualices tu información personal.
                        <div class="mb-3"></div>
                             <div class="float-right">
                                <a href="{{ route('people.create') }}" class="btn btn-light btn-sm float-right"  data-placement="left">
                                  {{ __('Completar perfil') }}
                                </a>
                             </div>
                     </div>
                    </div>
                    @else
                        Hola {{ Auth::user()->persons[0]->NAME_PERSON}}
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
