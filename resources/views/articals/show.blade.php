@extends('layout')

@section('content')


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">

            @foreach($articals as $artical)

				<h2>{{$artical->title}}</h2>
            </div>
			       {{$artical->body}}
            </div>
             @endforeach
    </div>	
</div>

@endsection