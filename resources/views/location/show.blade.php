@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
                <h4 class="mt-5 mb-5">{{ isset($location->name) ? $location->name : 'Location' }}</h4>
        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt class="text-left">Name</dt>
                <dd>{{ $location->name }}</dd>
                <dt class="text-left">Type</dt>
                <dd>{{ $location->type }}</dd>
                <dt class="text-left">Dimension</dt>
                <dd>{{ $location->dimenstion }}</dd>
            </dl>
            <h4>Characters residing here</h4>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Species</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($location->residents as $character): ?>
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
            <?php if($location->characters_for_which_this_is_the_original_location->isNotEmpty() ): ?>
            <h4>Characters originating from here</h4>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Species</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($location->characters_for_which_this_is_the_original_location as $character): ?>
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
            <?php endif ?>


        </div>
    </div>
</div>

@endsection