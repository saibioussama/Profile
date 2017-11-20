@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <h2>
        All subjects :
    </h2>
    <hr>

    
    <div class="row">
    @foreach(App\Section::all() as $section)
        <div  class="col-xs-2" style="position:sticky;">
            <b>
                {{$section->name}} :
            </b>
        </div>
        <ul class="list-group col-xs-10 " >
        @forelse($subjects->where('section_id',$section->id) as $subject)
            <li class="list-group-item " style="margin:5px;position:sticky;">
                {{$subject->name}}

                     
                    
                <form action="/subjects/{{$subject->id}}" onsubmit="return confirm('are you sure !')" method="post" class="pull-right btn-group"  >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <a href="/subjects/{{$subject->id}}/edit" class="text-success " type="submit">  
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
        <h4>no subject found ...</h4>
    @endforelse
    </ul>
    <hr class="col-xs-12">
    @endforeach
    </div>
    <hr>


    <a href="/subjects/create" class="btn btn-info " >Create new subject </a>

</div>

@endsection