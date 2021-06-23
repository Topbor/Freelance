@extends('layouts.app')

@section('content')
@guest
@else
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-3" style="width:500px;!important">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155"> </div>
            <div class="ml-3 w-100">
                <h4 class="mb-0 mt-0">{{Auth::user()->name}}</h4> <span>Senior Journalist</span>
                <div class="button mt-2 d-flex flex-row align-items-center justify-content-around">
                 <a style="width:80px;" href="{{ route('user.edit',['user'=>Auth::user()->id]) }}" class="btn btn-sm btn-outline-primary ">Edit</a>
                 <a style="width:80px;" class="btn btn-sm btn-primary " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection
