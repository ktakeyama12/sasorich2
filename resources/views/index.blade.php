@extends('layouts.app')

@section('content')
    <h1>   Upcoming Lunch List</h1>
    <div class="col-xs-6">
        @foreach ($events as $event)
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="glyphicon glyphicon-pencil">  About Event</span></h2>
                </div>
            <div class="panel-body">
                <div class = "lead">
                <span class="glyphicon glyphicon-search"> </span>
                 {!! link_to_route('events.show', $event->title, ['title' => $event->id]) !!}
                
                 </div>
                <br>
                ▼ Date: {{ $event->day }} {{ $event->timefrom }}-{{ $event->timeto }}
                <br>
                ▼ Theme: {{ $event->theme }}
                

                

                
                <?php /*
                @if (Auth::user()->is_favorite($micropost->id))
                        <div class="btn-group">
                            {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                                {!! Form::submit('unfavorite', ['class' => 'btn btn-warning btn-xs']) !!}
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div class="btn-group">
                            {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
                                {!! Form::submit('favorite', ['class' => 'btn btn-success btn-xs']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                 */ ?>
                 
                {!! Form::model($event, ['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                <br>
                {!! Form::submit('Delete Event', ['class' => 'btn btn-danger']) !!}
            </div>
            </div>
            {!! Form::close() !!}
            <br>
        @endforeach
   
        
    
        
        {!! link_to_route('events.create', 'Create New Event', null, ['class' => 'btn btn-info btn-lg']) !!}
        {!! link_to_route('events.profile', 'Profile', null, ['class' => 'btn btn-info btn-lg']) !!}
        <br>
        <br>
        
        
        <div class="well">
        <h2>@if (Auth::check())
            <?php /*<span class="glyphicon glyphicon-user"> {!! link_to_route('layouts.profile', 'マイページ') !!}</span> */?>
            <br>
            <span class="glyphicon glyphicon-log-out"> {!! link_to_route('logout.get', 'Logout') !!}</span>
            <br>
            <span class="glyphicon glyphicon-home"> {!! link_to_route('events.top', 'TOPへ戻る') !!}</span>
        @else
        
        {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        <br>
        {!! link_to_route('login', 'Login') !!}
        <br>
        
        @endif
        
        <br>
        </h2>
        
        </div>
 </div>
        
@endsection