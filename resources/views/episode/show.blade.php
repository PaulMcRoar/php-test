@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
                <h4 class="mt-5 mb-5">{{ isset($episode->name) ? $episode->name : 'Episode' }}</h4>
        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt class="text-left">Name</dt>
                <dd>{{ $episode->name }}</dd>
                <dt class="text-left">Episode</dt>
                <dd>{{ $episode->episode }}</dd>
                <dt class="text-left">Air Date</dt>
                <dd>{{ $episode->air_date }}</dd>

            </dl>
            <h4>Characters</h4>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Species</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($episode->characters as $character): ?>
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
                <?php endforeach ?>                    
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection