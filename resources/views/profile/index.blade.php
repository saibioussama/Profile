@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@keyframes anim {
  0% {
    transform: scaleX(0.1);
  }
  100% {
    transform: scaleX(1);
  }
}

.line {  
    animation: 1s ease-out 300ms 1 anim;
}
.header{
    height:600px;
    display:flex;
    flex-direction:column;
    justify-content:start;
    align-items:center;
}
.social-group{
    padding:10px;
    background:rgba(255,255,255,0.4);
    box-shadow:0px 0px 5px lightgray;
    border-radius:5px;
    width:350px;
    display:flex;
    flex-direction:row;
    justify-content:space-around;
}
.img{
    border-radius:100%;
    height:200px;
    width:200px;
    border:5px solid white;
    box-shadow:0px 0px 20px gray;
    cursor:pointer;
    transition:all 300ms ease-in-out;
}

.img:hover{
    box-shadow:0px 0px 10px gray;
    transform:scale(1.1);
}

  .about-header{
        background:white;
        box-shadow:0px 0px 1px skyblue;
        text-align:center;
    }

</style>


@section('content')

  @include('profile.header')
  @include('profile.about')
  @include('profile.works')
  @include('profile.footer')

@endsection
