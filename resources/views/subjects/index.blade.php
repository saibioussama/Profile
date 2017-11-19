@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <h2>
        All subjects :
    </h2>
    <hr>

    <ul class="list-group">
        @forelse($subjects as $subject)
            <li class="list-group-item" style="margin:5px;">
                {{$subject->name}}

                     
                    
                <form action="/subjects/{{$subject->id}}" method="post" class="pull-right btn-group"  >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <a href="/subjects/{{$subject->id}}/edit" class="btn btn-sm btn-success " type="submit">  
                        Edit
                    </a>
                    <button class="btn btn-sm btn-danger" type="submit">  
                        delete
                    </button>
                </form>
            </li>
        @empty
            <h4>no subject found ...</h4>
        @endforelse
    </u>
    <hr>

    <a href="/subjects/create" class="btn btn-info " >Create new subject </a>

</div>

@endsection