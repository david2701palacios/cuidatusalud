@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Email User:</strong>
                            {{ $user->EMAIL_USER }}
                        </div>
                        <div class="form-group">
                            <strong>Password User:</strong>
                            {{ $user->PASSWORD_USER }}
                        </div>
                        <div class="form-group">
                            <strong>Id Rol Fk:</strong>
                            {{ $user->ID_ROL_FK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
