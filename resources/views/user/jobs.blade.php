@extends('layouts.app')

@section('content')
<div class="row  container" style="margin:0 auto;">
    <div class="col-md-10" style="margin:0 auto;">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Your jobs</div>
            </div>
           

                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                            @forelse ($jobs as $item)
                                <li class="list-group-item">
                                    <div class="todo-indicator bg-warning"></div>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper d-flex justify-content-between">
                                          
                                                <div class="widget-heading">{{$item->title}}
                                                </div>
                                                <div class="widget-heading d-flex justify-content-around">
                                                <a href="{{route('jobs.edit', ['job'=>$item->id])}}">Update</a>
                                                <form action="{{route('jobs.destroy',['job'=>$item->id])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="background:white; border:none; text-decoration:none; width: 100px !important;;" type="submit">Delete</button>               
                                                    </form> 
                                                </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                @empty
                            <p>There are no tasks for this moment </p>
                        @endforelse
                            </ul>
                        </div>
                    </div>

          
        </div>
    </div>
</div>
    @endsection
