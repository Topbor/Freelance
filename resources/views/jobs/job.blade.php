@extends('layouts.app')

@section('content')
   <div class="container">
            <div class="content" style="text-align:center;">
                <div class="title3 m-b-md all">
                {{ $job->title}}
                </div>
               <p class="disc" style="margin-bottom:100px">{{$job->longDesc}}</p>
               <div class="d-flex justify-content-around" style="text-align:center;">
                            <p class="type "  style="text-align:center; margin-left:200px;">
                            Language: {{ $job->language}}
                            </p>
                            <p class="price "  style="text-align:center;">
                            Price: {{ $job->price}}$
                            </p>
                            @guest
                            <p class="price "  style="text-align:center; margin-right:200px;">
                            <a style=" color:black;" href="{{ route('login') }}">Make Suggestion</a>
                            </p>
                            @else
                            <p class="price "  style="text-align:center;">
                            <form action="{{route('user.make.suggestion')}}" method="POST">

                            <input name="job_id" type="hidden" value="{{$job->id}}" >
                                                    @csrf
                                                    <button style="background:white; border:none; text-decoration:none; width: 200px !important;;" type="submit">Make Suggestion</button>               
                                                    </form> 
                                                </div>
                            </p>
                            @endguest
                            </div>
        </div>
        </div>
@endsection
