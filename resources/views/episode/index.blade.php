@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Episodes</h4>
            </div>

        </div>

        @if(count($episodes) == 0)
            <div class="panel-body text-center">
                <h4>No Episodes Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Episode</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <td>{{ $episode->name }}</td>
                            <td>{{ $episode->episode }}</td>

                            <td>
                                    <div class="pull-right">
                                        <a href="{{ route('episode.show', $episode->id ) }}" class="btn btn-info" title="Show Episode">
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
            {!! $episodes->render() !!}
        </div>

        @endif

    </div>
</div>

@endsection