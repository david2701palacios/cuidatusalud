@extends('layouts.app')

@section('template_title')
    {{ $role->name ?? 'Show Role' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Role</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Rol:</strong>
                            {{ $role->NAME_ROL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection