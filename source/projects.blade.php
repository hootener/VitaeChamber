@extends('_layouts.master')

@section('body')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <p>I'm currently getting some projects together. Come back later.</p>
        @foreach ($projects as $project)
            {{--  <li><a href="{{$project->getUrl()}}">{{ $project->title }}</a>
            </li>  --}}
        @endforeach

    </div>
</div>
@endsection