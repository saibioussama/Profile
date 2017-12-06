@extends('layouts.app')

<style>
    .header{
        margin:20px;
        height:150px;
        background:white;
        border:0.5px solid lightgray;
        /* box-shadow:0 0 40px -20px black; */
        padding:20px;
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    .img{
        width:200px;
        height:200px;
        position:absolute;
        right:50px;
        border:10px solid #eee;
        box-shadow:0 0 40px -20px black;
        border-radius:100%;
    }

    .about{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }
    .skills{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }
    .experience{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }
    .formation{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }

    .certifications{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }
    .cours{
        margin:20px;
        background:white;
        box-shadow:0 0 40px -20px black;
        padding:20px;
    }

    .contact{
        background:white;
        box-shadow:-10px 0 40px -20px black;
        padding:20px;
    }
    .footer{
        background:#eee;
        box-shadow:-10px 0 40px -20px black;
        padding:20px;
        display:flex;
        justify-content:space-around;
        border-top:2px solid  lightgray;
    }
    h4{
        width:80%;
    }
    h2{
        text-align:center;
    }

    .cours ul{
        list-style:none;
    }
    .cours li{
        display:block;
        background:whitesmoke;
        margin:5px;
        padding:10px;
        cursor:pointer;
        text-align:center;
    }
    .cours li:hover{
        background:#eee;
    }

</style>

@section('content')
<br><br>
@include('cv.header')
<hr/>
<div class="row">
    <div class="col-md-8">
        @include('cv.about')
        @include('cv.cours')
    </div>
    <div class="col-md-4">
        @include('cv.experience')
        @include('cv.formation')
        @include('cv.skills')
        @include('cv.certifications')
    </div>
</div>

@include('cv.contact')
@include('cv.footer')
@endsection