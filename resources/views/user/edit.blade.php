@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md" style="text-align:center;">
                   Updating the profile
                </div>

            </div>
    <form class="form-signin" action="{{route('user.update',['user'=>$user->id])}}" method="POST">
    @csrf
      <input name="_method" type="hidden" value="PUT">
        <input name="name" type="text" style="margin-bottom:30px;" value="{{$user->name}}"  class="form-control" placeholder="Name" >
        
        <input style="margin-bottom:30px;" class="btn btn-lg btn-primary btn-block" value="Update" type="submit"></input>
      
    </form>
    @endsection
