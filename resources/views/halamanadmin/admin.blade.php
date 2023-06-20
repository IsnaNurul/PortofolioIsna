@extends('halamanadmin.template')

@section('container')
<div class="pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 text-center">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
@endsection