@extends('layouts.master') @section('title')    Blog App@endsection @section('content')     <main role="main" class="container"  style="margin-top: 30px">            @foreach($posts as $post)       <div class="row">       	<h4 style="color:green;">{{$post->title}}</h4><br>     	</div>        <br>       <div style="height:100px">       	{{$post->description}}<br>       	By: {{ $post->user->name}}<br>       	On: {{$post->created_at}}       </div>                   @endforeach                   </div>     </main>@endsection