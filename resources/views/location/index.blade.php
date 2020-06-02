@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Locations</h4>
            </div>

        </div>

        @if(count($locations) == 0)
            <div class="panel-body text-center">
                <h4>No Locations Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Dimension</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->dimension }}</td>

                            <td>
                                    <div class="pull-right">
                                        <a href="{{ route('location.show', $location->id ) }}" class="btn btn-info" title="Show Location">
                                            <span class="glyphicon glyphicon-open" ></span>
                                        </a>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $locations->render() !!}
        </div>

        @endif

    </div>
</div>

@endsection