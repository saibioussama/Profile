@extends('layouts.app')

<style>
    a:hover ,a:link,a:active,a:focus{
        text-decoration:none;
        color:#515151;
    }
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
        border:10px solid whitesmoke;
        /* box-shadow:0 0 40px -20px black; */
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
        border-left:4px solid transparent;
        transition:all 300ms ease-in-out;
    }
    .cours li:hover{
        background:#eee;
        border-left:4px solid lightgray;
    }

    .cour{
        background:whitesmoke;
        margin:20px 10px;
        transition:all 200ms ease-in-out;
        padding:10px 20px;
        border-left:5px solid transparent;
        
    }
    
    .cour:hover{
        border-left:5px solid darkcyan;
    }
    
    .file{
        margin:10px 0;
        cursor:pointer;
        background:white;
        border:1px solid #eee;
        padding:10px;
        transition:all 300ms ease-in-out;
    }

    .file:hover{
        background:darkcyan;
        color:white;
    }
   
</style>

@section('content')

@if(!Auth::check())
    <a class="btn btn-default"  href="{{ route('login') }}" 
        style="border-radius:0px;border:none;background:darkcyan;color:white;
                position:absolute;top:0px;">Login
    </a>
@endif

<br><br>
@include('cv.header')
<hr/>
<div class="row">
    <div class="col-md-8">
        @include('cv.about')
        @include('cv.cours',['cours'=>$cours,'section_id',$section_id])
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