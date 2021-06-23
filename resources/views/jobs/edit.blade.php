@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md" style="text-align:center;">
                   Updating the vacation
                </div>

            </div>
    <form class="form-signin" action="{{route('jobs.update',['job'=>$job->id])}}" method="POST">
    @csrf
      <input name="_method" type="hidden" value="PUT">
        <input name="title" type="text" style="margin-bottom:30px;" value="{{$job->title}}"  class="form-control" placeholder="Vacation title" >
        <textarea class="form-control" style="margin-bottom:30px;"  rows="8" name="shortDesc" placeholder="Short Description"> {{$job->shortDesc}}</textarea>
        <textarea class="form-control" style="margin-bottom:30px;"   rows="8" name="longDesc" placeholder="Long Description">{{$job->longDesc}}</textarea>
        <input name="price" type="number" style="margin-bottom:30px;margin-top:30px; " value="{{$job->price}}" class="form-control"  placeholder="Price(in $)">
        <input style="margin-bottom:30px;" class="btn btn-lg btn-primary btn-block" value="Update" type="submit"></input>
      
    </form>
    @endsection
