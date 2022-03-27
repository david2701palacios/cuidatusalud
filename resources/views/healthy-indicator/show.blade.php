@extends('layouts.app')

@section('template_title')
    {{ $healthyIndicator->name ?? 'Show Healthy Indicator' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Healthy Indicator</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('healthy-indicators.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Healthy Indicators:</strong>
                            {{ $healthyIndicator->NAME_HEALTHY_INDICATORS }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
