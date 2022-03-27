@extends('layouts.app')

@section('template_title')
    Update Lab Result
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Lab Result</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lab-results.update', $labResult->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('lab-result.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
