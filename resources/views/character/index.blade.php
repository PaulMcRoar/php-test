@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Characters</h4>
            </div>

        </div>

        @if(count($characters) == 0)
            <div class="panel-body text-center">
                <h4>No Characters Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Species</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($characters as $character)
                        <tr>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->species }}</td>

                            <td>
                                    <div class="pull-right">
                                        <a href="{{ route('character.show', $character->id ) }}" class="btn btn-info" title="Show Character">
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
            {!! $characters->render() !!}
        </div>

        @endif

    </div>

</div>
@endsection