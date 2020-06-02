@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
                <h4 class="mt-5 mb-5">{{ isset($character->name) ? $character->name : 'Character' }}</h4>
                <img src="{{ $character->image }}"/>
        </div>

        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt class="text-left">Name</dt>
                <dd>{{ $character->name }}</dd>
                <dt class="text-left">Species</dt>
                <dd>{{ $character->species }}</dd>
                <dt class="text-left">Origin</dt>
                <dd><?php if($character->origin) : ?>
                        {{ $character->origin->name }} <div class="pull-right"> <a href="{{ route('location.show', $character->origin->id ) }}" class="btn btn-info" title="Show origin"><span class="glyphicon glyphicon-open" ></span></a>
                        </div>
                    <?php else: ?>
                        Unknown
                    <?php endif ?>
                </dd>
                <dt class="text-left">Last known location</dt>
                <dd><?php if($character->location) : ?>
                        {{ $character->location->name }} <div class="pull-right"> <a href="{{ route('location.show', $character->location->id ) }}" class="btn btn-info" title="Show location"><span class="glyphicon glyphicon-open" ></span></a>
                        </div>
                    <?php else: ?>
                        Unknown
                    <?php endif ?>
                </dd>
            </dl>
            <h4> Episodes </h4>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Episode</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($character->episodes as $episode): ?>
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
                <?php endforeach ?>                    
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection