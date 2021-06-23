@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md" style="text-align:center;">
                   Add a new vacation
                </div>

            </div>
    <form class="form-signin" action="{{route('jobs.store')}}" method="post">
    @csrf
        <input name="title" type="text" style="margin-bottom:30px;"  class="form-control" placeholder="Vacation title" >
       
        <textarea class="form-control" style="margin-bottom:30px;" rows="8" name="shortDesc" placeholder="Short Description"></textarea>
        <textarea class="form-control" style="margin-bottom:30px;" rows="8" name="longDesc" placeholder="Long Description"></textarea>
        <select class="form-control" size="4" name="language">
          <option disabled>Choose type</option>
          <option selected value="PHP">PHP</option>
          <option value="JS">JS</option>
          <option value="C#">C#</option>
        </select>
        <input name="price" type="number" style="margin-bottom:30px;margin-top:30px; "  class="form-control"  placeholder="Price(in $)">
        <input style="margin-bottom:30px;" class="btn btn-lg btn-primary btn-block" value="Add" type="submit"></input>
      
    </form>
    @endsection
