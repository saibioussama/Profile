@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <h2>
        All sections :
    </h2>
    <hr>

    <ul class="list-group">
        @forelse($sections as $section)
            <li class="list-group-item" style="margin:5px;">
                {{$section->name}}
                <form action="/sections/{{$section->id}}" method="post" class="pull-right btn-group"  >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <a href="/sections/{{$section->id}}/edit" class="btn btn-sm btn-success " type="submit">  
                        Edit
                    </a>
                    <button class="btn btn-sm btn-danger" type="submit">  
                        delete
                    </button>
                </form>
            </li>
        @empty
            <h4>no section found ...</h4>
        @endforelse
    </u>
    <hr>

    <a href="/sections/create" class="btn btn-info "  >Create new section </a>

</div>

@endsection