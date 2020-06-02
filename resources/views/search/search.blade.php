@extends('layout')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Search Results</h4>
            </div>

        </div>


        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" >
            <a class="nav-link <?php if($tab == 'characters'): ?>active<?php endif ?>" id="characters-tab" data-toggle="tab" href="#characters" role="tab" aria-controls="characters" aria-selected="<?php if($tab == 'characters'): ?>active<?php else: ?>false<?php endif ?>">Characters</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link <?php if($tab == 'episodes'): ?>active<?php endif ?>" id="episodes-tab" data-toggle="tab" href="#episodes" role="tab" aria-controls="episodes" aria-selected="<?php if($tab == 'episodes'): ?>active<?php else: ?>false<?php endif ?>">Episodes</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link <?php if($tab == 'locations'): ?>active<?php endif ?>" id="locations-tab" data-toggle="tab" href="#locations" role="tab" aria-controls="locations" aria-selected="<?php if($tab == 'locations'): ?>active<?php else: ?>false<?php endif ?>">Locations</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane <?php if($tab == 'characters'): ?> active <?php endif ?>" id="characters" role="tabpanel" aria-labelledby="characters-tab">
                @if(count($characters) == 0)
                    <div class="panel-body text-center">
                        <h4>No Characters matched the search</h4>
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
                    {!! $characters->appends(['tab' => 'characters'])->links() !!}
                </div>

                @endif

          </div>
          <div class="tab-pane <?php if($tab == 'episodes'): ?>active<?php endif ?>" id="episodes"  role="tabpanel" aria-labelledby="episodes-tab">
            @if(count($episodes) == 0)
                <div class="panel-body text-center">
                    <h4>No Episodes matched the search</h4>
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
            @endif

            <div class="panel-footer">
                {!! $episodes->appends(['tab' => 'locations'])->links() !!}
            </div>
              
          </div>
          <div class="tab-pane <?php if($tab == 'locations'): ?> active <?php endif ?> " id="locations"  role="tabpanel" aria-labelledby="locations-tab">
               @if(count($locations) == 0)
                    <div class="panel-body text-center">
                        <h4>No Locations match the search</h4>
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
                    {!! $locations->appends(['tab' => 'locations'])->links() !!}
                </div>

                @endif

          </div>
        </div>
    </div>
</div>
@endsection