@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/cours" method="post" class="row">
        {{ csrf_field() }}
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel default">
                <div class="panel-heading panel">
                    Add new cours :
                </div>
                <div class="panel-body">
                    <label for="title">title :</label>
                    <input name="title" type="text" placeholder="title..." class="form-control">
                    <br>
                    <label for="content">content :</label>
                    <textarea name="content" type="text" placeholder="add some content here ..." rows="6" class="form-control">
                    </textarea>
                    <br>
                    <div class="row">
                        <div class="col-sm-6" style="padding:10px;">
                            <label for="type">type :</label>
                            <select name="type" class="form-control">
                                <option value="1">Cours</option>
                                <option value="2">TD</option>
                                <option value="3">TP</option>                        
                            </select>
                        </div>
                        <div class="col-sm-6" style="padding:10px;">
                            <label for="subject_id">subject :</label>
                            <select name="subject_id" class="form-control">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name }} </option>                                               
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <hr>
                    <input type="submit" class="btn btn-success pull-right" value="add" >
                </div>
            </div>
        </div>

    </form>
</div>

@endsection