@extends('layouts.app')

@section('template_title')
    Create Medical Control
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Medical Control</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('medical-controls.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('medical-control.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
