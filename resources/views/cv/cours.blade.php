<div class="cours">
    <h2>Cours </h2>
    <hr>
    <ul>
        @foreach(App\Section::all() as $section)
            <li>
                {{$section->name}}
            </li>
        @endforeach
    </ul>
</div>