@extends('_layouts.master')

@section('body')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h3>{{ $page->title }}</h3>
        <h4>{{ date( 'Y-m-d', $page->date) }}</h4>
        @yield('projectContent')        
    </div>
</div>
@endsection

