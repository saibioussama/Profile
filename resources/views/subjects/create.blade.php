@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/subjects" method="post" class="row">
        {{ csrf_field() }}
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel default">
                <div class="panel-heading panel">
                    Add new subject :
                </div>
                <div class="panel-body">
                    <label for="name">Name :</label>
                    <input name="name" type="text" placeholder="name of subject ..." class="form-control">
                    <br>
                    <label for="teacher">teacher :</label>
                    <input name="teacher" type="text" placeholder="name of teacher ..." class="form-control">
                    <br>
                    <label for="section_id">section :</label>
                    <select name="section_id" class="form-control">
                        @foreach($sections as $section)
                            <option value="{{$section->id}}">
                                {{$section->name}}
                            </option>
                        @endforeach
                    </select>
                    <hr>
                    <input type="submit" class="btn btn-success pull-right" value="add" >
                </div>
            </div>
        </div>

    </form>
</div>

@endsection