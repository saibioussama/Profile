@extends('layouts.app')


@section('content')

<div class="container">
    @forelse(App\Message::all() as $message)
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>
                {{$message->ip_address}}
            </b>
        </div> 
        <div class="panel-body">
            <p>
                {{$message->content}}
            </p>
        <hr>
            <small class="text-muted">
                {{$message->created_at}}            
            </small>
        </div>
    </div>

    @empty
    <p>no messages found ...</p>
    @endforelse

</div>

@endsection
