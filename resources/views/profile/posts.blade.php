<div style="background:white;padding:5px;text-align:center;box-shadow:0px 0px 1px skyblue;margin:0px">
        <h3>- Cours -</h3>
    </div>
<div style="background:rgba(0,0,0,0.05);padding:50px 0px;margin:0px" class="row">
    <div class="container col-md-6 col-md-offset-3">
        @forelse(App\Cour::all() as $cour)
            <div class="panel panel-default" >
                <div class="panel-heading" style="padding:10px;display:flex;justify-content:space-between;align-items:center;">
                    <h4><b>{{$cour->title}}</b></h4>
                    <small class="text-danger">
                        <b>
                            {{App\Section::all()->where('id',App\Subject::all()->where('id',$cour->subject_id)->first()->section_id)->first()->name}}                        
                        </b>
                    </small>
                </div>
                <div class="panel-body">
                    <p>
                        {{$cour->content}}
                        @foreach(App\File::all()->where('cour_id',$cour->id) as $file)
                            <a href="/{{$file->full_path}}">
                                <li class="list-group-item list-group-item-info list-group-item-action"
                                    style="width:50%">{{ $file->name }}</li>
                            </a>
                        @endforeach
                    </p>
                    <hr>
                    <div>
                        <small class="text-muted">
                            {{$cour->created_at}}
                        </small>
                        <small class="text-muted pull-right">
                            {{App\Subject::all()->where('id',$cour->subject_id)->first()->name}}
                        </small>
                    </div>
                </div>
            </div>
        @empty
            <h4>no cour found ..</h4>
        @endforelse
    </div>
    
</div>