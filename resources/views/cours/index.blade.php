@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <h2>
        All cours :
    </h2>
    <hr>

    <div class="row">
        @forelse($cours as $cour)
            <div class="col-md-10 col-md-offset-1 panel panel-default" >
                <div class="panel-heading">
                    <b>{{$cour->title}}</b>
                    <p class="pull-right">{{$cour->type==1?"cour":"td"}}</p>
                </div>
                <div class="panel-body">
                    <p>{{$cour->content}}</p>
                </div>
                <div style="border-top:1px solid #eee;padding:10px;">
                    <small class="text-muted">
                        {{$cour->created_at}}
                    </small>
                </div>
                
            </div>
        @empty
            <h4>no cours found ...</h4>
        @endforelse
    </div>
    
    <hr>
    <a href="/cours/create" class="btn btn-info " >Add new cour </a>

</div>

@endsection