@extends('layouts.app')

@section('template_title')
    {{ $personsDetail->name ?? 'Show Persons Detail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Persons Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('persons-details.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Principal Person Fk:</strong>
                            {{ $personsDetail->ID_PRINCIPAL_PERSON_FK }}
                        </div>
                        <div class="form-group">
                            <strong>Id Person In Chargue Fk:</strong>
                            {{ $personsDetail->ID_PERSON_IN_CHARGUE_FK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
