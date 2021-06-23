@extends('layouts.app')

@section('content')
<div id="section1">
	<div class="container justify-content-between rov p-5 k">
        <div class="article">
            <h1>Please choose who you are</h1>
        </div>
    <div class="btns">
				<a href="{{route('jobs.index')}}" id="apple">
					<div>
                    <i class="fas fa-star-half-alt"></i>
					</div>
					<div class="nujno">
						<p>EMPLOYEE</p>
					</div>
				</a>
				<a href="{{route('login')}}" id="play">
					<div>
                    <i class="fas fa-book-open"></i>
					</div>
					<div class="nujno">
						<p>EMPLOYER</p>
					</div>
				</a>
			</div>
	</div>
</div>

 @endsection

	