@extends('layouts.app')

@section('template_title')
    {{ $medicalControl->name ?? 'Show Medical Control' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medical Control</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medical-controls.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Doctor:</strong>
                            {{ $medicalControl->NAME_DOCTOR }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Doctor:</strong>
                            {{ $medicalControl->ROL_DOCTOR }}
                        </div>
                        <div class="form-group">
                            <strong>Date Control:</strong>
                            {{ $medicalControl->DATE_CONTROL }}
                        </div>
                        <div class="form-group">
                            <strong>Observations:</strong>
                            {{ $medicalControl->OBSERVATIONS }}
                        </div>
                        <div class="form-group">
                            <strong>Id Person Fk:</strong>
                            {{ $medicalControl->ID_PERSON_FK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
