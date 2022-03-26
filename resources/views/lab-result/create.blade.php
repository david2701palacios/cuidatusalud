@extends('layouts.app')

@section('template_title')
    Create Lab Result
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Lab Result</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lab-results.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lab-result.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
