@extends('layouts.app')

@section('content')
<div class="container">
            <div class="content">
                <div style="text-align:center;" class="title3 m-b-md all">
                   All tasks
                </div>
                <div class="cards">

                @guest
                      @forelse ($jobs as $item)
                      <div class="card" style="margin-bottom:20px;">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align:center;">
                            <!---<form action="{{route('jobs.destroy',['job'=>$item->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>               
                            </form>-->
                            <a href="{{route('jobs.show', ['job'=>$item->id])}}">{{ $item->title }}</a>
                            </h4>
                            <p>Show {{route('jobs.show', ['job'=>$item->id])}}</p>
                            <p>Edit {{route('jobs.edit', ['job'=>$item->id])}}</p>
                            <p class="card-text l" style="text-align:center;">
                            {{ $item->shortDesc }}
                            </p>
                            <div class="d-flex justify-content-around">
                            <p class="type l">
                            Language: {{ $item->language}}
                            </p>
                            <p class="price l">
                            Price: {{ $item->price}}$
                            </p></div>

                        </div>
                        </div>
                         
                        @empty
                            <p>There are no tasks for this moment </p>
                        @endforelse
                        </div>
                @else
                @forelse ($jobs as $item)
                    <div class="card" style="margin-bottom:20px;">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align:center;">
                            <!---<form action="{{route('jobs.destroy',['job'=>$item->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>               
                            </form>-->
                            <a href="{{route('jobs.show', ['job'=>$item->id])}}">{{ $item->title }}</a>
                            </h4>
                            <p>Show {{route('jobs.show', ['job'=>$item->id])}}</p>
                            <p>Edit {{route('jobs.edit', ['job'=>$item->id])}}</p>
                            <p class="card-text l" style="text-align:center;">
                            {{ $item->shortDesc }}
                            </p>
                            <div class="d-flex justify-content-around">
                            <p class="type l">
                            Language: {{ $item->language}}
                            </p>
                            <p class="price l">
                            Price: {{ $item->price}}$
                            </p></div>

                        </div>
                        </div>
                         
                        @empty
                            <p>There are no tasks for this moment </p>
                        @endforelse
                        </div>
                @endguest
            </div>
        </div>
        </div>
        @endsection