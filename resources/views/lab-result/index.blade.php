@extends('layouts.app')

@section('template_title')
    Lab Result
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lab Result') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lab-results.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Description Results</th>
										<th>Image</th>
										<th>Id Person Fk</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labResults as $labResult)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $labResult->TITLE }}</td>
											<td>{{ $labResult->DESCRIPTION_RESULTS }}</td>
											<td>{{ $labResult->IMAGE }}</td>
											<td>{{ $labResult->ID_PERSON_FK }}</td>

                                            <td>
                                                <form action="{{ route('lab-results.destroy',$labResult->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lab-results.show',$labResult->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lab-results.edit',$labResult->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $labResults->links() !!}
            </div>
        </div>
    </div>
@endsection
