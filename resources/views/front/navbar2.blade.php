@extends('front.app1')

@section('content')

<div class="col-md-3">
    @include('front.inc.sidebar2')
</div>                    

<div class="col-md-9">
    @include('front.inc.news')
</div>

@endsection