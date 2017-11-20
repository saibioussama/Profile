@extends('layouts.app')

@section('content')

<div class="container" style="background:rgba(250,250,250,0.5)">
    <h2>
        All cours :
    </h2>
    <hr>
    <div class="row">
    
    </div>
    @foreach(App\Section::all() as $section)
        <div class="col-xs-2">
            <b>{{$section->name}} :</b>
        </div>
        <div class="col-xs-10">
            @foreach($subjects->where('section_id',$section->id) as $subject)
                <div class="panel panel-warning">
                <div class="panel-heading" onclick="hideDisplaybtn({{$subject->id}})" style="cursor:pointer">
                    <b>
                        {{$subject->name}}      
                    </b>
                    <div class="pull-right">
                        <input type="button" value="" style="background:none;border:none;font-family:Segoe MDL2 Assets" id="btn{{$subject->id}}" />
                    </div>
                </div>
                <div class="panel-body" style="padding:30px; 10px" id="body{{$subject->id}}" hidden>
                        @forelse(App\Cour::all()->where('subject_id',$subject->id) as $cour)
                            <div class="row" style="padding:0px 5px;"> 
                                <div class="col-md-10 col-md-offset-1 panel panel-default" style="margin-bottom:40px;">                        
                                    <form action="/cours/{{$cour->id}}" method="post" onSubmit="return confirm('are you sure !!!');" style="position:absolute;right:-15px;top:-15px;" title="delete" >
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" style="font-family:Segoe MDL2 Assets;width:30px;height:30px;border-radius:100%;padding:0px;border:3px solid #eee;box-shadow:0px 0px 10px lightgray">
                                            
                                        </button>
                                    </form>
                                    <a href="/cours/{{$cour->id}}/edit" title="edit" class="btn btn-success" style="position:absolute;left:-15px;top:-15px;font-family:Segoe MDL2 Assets;width:30px;height:30px;border-radius:100%;padding:0px;border:3px solid #eee;box-shadow:0px 0px 10px lightgray">
                                        
                                    </a>

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
                            </div>
                    @empty
                            <h4>no cours found ...</h4>
                    @endforelse    

                </div>
                </div> 

            @endforeach
        </div>
        <hr class="col-xs-12">
    @endforeach

    <hr>
    <a href="/cours/create" class="btn btn-info " style="margin-bottom:20px;" >Add new cour </a>
</div>

<script>
    function hideDisplaybtn(id){        
        var btn = $('#btn'+id);
        if(btn.val()=='')
            btn.val('');
        else 
            btn.val('');
        $('#body'+id).slideToggle();
    }
</script>

@endsection