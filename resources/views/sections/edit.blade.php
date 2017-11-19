@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/sections/{{$section->id}}" method="post" class="row">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel default">
                <div class="panel-heading panel">
                    Edit new section :
                </div>
                <div class="panel-body">
                    <label for="name">Name :</label>
                    <input name="name" value="{{$section->name}}" type="text" placeholder="name of section ..." class="form-control">
                    <hr>
                    <input type="submit" class="btn btn-success pull-right" value="update" >
                </div>
            </div>
        </div>

    </form>
</div>

@endsection