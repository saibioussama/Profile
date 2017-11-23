@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <div style="display:flex;justify-content:space-between;align-items:center">
        <h2>
        All sections :
        </h2>
        <a href="/sections/create" class="btn btn-info" >Add new section </a>
    </div>    
    <hr>

    <ul class="list-group">
        @forelse($sections as $section)
            <li class="list-group-item" style="margin:5px;">
                {{$section->name}}
                <form action="/sections/{{$section->id}}" onsubmit="return confirm('are you sure')" method="post" class="pull-right btn-group"  >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <a href="/sections/{{$section->id}}/edit" class="text-success " type="submit">  
                        <button type="button" style="border:none;background:none">  
                             edit
                        </button>
                    </a>
                     |
                    <button style="border:none;background:none" class="text-danger" type="submit">  
                        delete
                    </button>
                </form>
            </li>
        @empty
            <h4>no section found ...</h4>
        @endforelse
    </u>
    <hr>
</div>

@endsection