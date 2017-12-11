@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/subjects/{{$subject->id}}" method="post" class="row">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel default">
                <div class="panel-heading panel">
                    edit subject :
                </div>
                <div class="panel-body">
                    <label for="name">Name :</label>
                    <input name="name" value="{{$subject->name}}" type="text" placeholder="name of subject ..." class="form-control">
                    <br>
                    <label for="teacher">teacher :</label>
                    <input name="teacher" value="{{$subject->teacher}}" type="text" placeholder="name of teacher ..." class="form-control">
                    <br>
                    <label for="section_id">section :</label>
                    <select name="section_id" class="form-control">
                        @foreach($sections as $section)
                            <option value="{{$section->id}}" {{$subject->section_id == $section->id ? "selected":""}}>
                                {{$section->name}}
                            </option>
                        @endforeach
                    </select>
                    <hr>
                    <input type="submit" class="btn btn-success pull-right" value="update" >
                </div>
            </div>
        </div>

    </form>
</div>

@endsection