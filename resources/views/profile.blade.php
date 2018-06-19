@extends('layouts.app')

@section('content')
    <h1>My Page</h1>
         Name: {{ Auth::user()->name }}
         <br>
         Email: {{ Auth::user()->email }}
        <br>
        Events that you're going to join:
        <br>
        <?php
        foreach($name as $name){
            print $name;
            ?><br><?php
        }
        ?>
@endsection
