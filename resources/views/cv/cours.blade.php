<div class="cours">
    <h2>Cours </h2>
    <hr>
    <div class="row">
        <ul class="col-md-4">
            <a href="/" >
                <li style="{{($section_id == 0)?"border-left:5px solid darkcyan;background:#eee;color:darkcyan":""}}">
                    <b>All</b>
                </li>
            </a>
            @foreach(App\Section::all() as $section)
            <a href="/{{$section->id}}" >
                <li style="{{($section->id ==$section_id)?"border-left:5px solid darkcyan;background:#eee;color:darkcyan":""}}">
                    {{$section->name}}
                </li>
                </a>
            @endforeach
        </ul>
        <div class="col-md-8">
            @forelse($cours as $cour)
                <div class="cour" >
                    <b>{{$cour->title}}</b>
                    <hr style="margin-top:0px;border-top:1px solid lightgray;">
                    {{$cour->content}}
                    @foreach(App\File::all()->where('cour_id',$cour->id) as $file)
                        <a href="/{{$file->full_path}}">
                            <div class="file">
                                {{$file->name}}
                            </div>
                        </a>
                    @endforeach
                    <hr style="margin-bottom:0px;border-top:1px solid lightgray;">
                    <small class="text-muted">
                        {{$cour->created_at}}
                    </small>
                </div>
            @empty
                <hr>
                <h3 style="text-align:center">cours not found ...</h3>
                <hr>
            @endforelse            
        </div>
    </div>    
</div>