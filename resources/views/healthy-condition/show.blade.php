@extends('layouts.app')

@section('template_title')
    {{ $healthyCondition->name ?? 'Show Healthy Condition' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Healthy Condition</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('healthy-conditions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Healthy Condition:</strong>
                            {{ $healthyCondition->NAME_HEALTHY_CONDITION }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
