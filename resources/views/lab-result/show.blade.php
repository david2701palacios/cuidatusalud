@extends('layouts.app')

@section('template_title')
    {{ $labResult->name ?? 'Show Lab Result' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lab Result</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lab-results.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $labResult->TITLE }}
                        </div>
                        <div class="form-group">
                            <strong>Description Results:</strong>
                            {{ $labResult->DESCRIPTION_RESULTS }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $labResult->IMAGE }}
                        </div>
                        <div class="form-group">
                            <strong>Id Person Fk:</strong>
                            {{ $labResult->ID_PERSON_FK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
