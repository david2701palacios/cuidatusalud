@extends('layouts.app')

@section('template_title')
    {{ $person->name ?? 'Show Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Person:</strong>
                            {{ $person->NAME_PERSON }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name Person:</strong>
                            {{ $person->LAST_NAME_PERSON }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $person->GENDER }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $person->AGE }}
                        </div>
                        <div class="form-group">
                            <strong>Id User Fk:</strong>
                            {{ $person->ID_USER_FK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
