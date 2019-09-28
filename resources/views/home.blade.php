@extends('layouts.mainlogin')
@section('PageTitle', 'Inspired Steps')

@section('css')
<style>
.nice-select{
    width:100%;
}
.contact-from .main-form .single-form input, .contact-from .main-form .single-form select{
    width: 100%;
    height: 50px;
    padding: 0 20px;
    border: 1px solid #a1a1a1;
    border-radius: 5px;
    color: #8a8a8a;
    font-size: 15px;
}
.contact-from .main-form .single-form textarea{
    width: 100%;
    border: 1px solid #a1a1a1;
    border-radius: 5px;
    color: #8a8a8a;
    font-size: 15px;
}
</style>
    
@endsection
@section('content')

<div id="app">
<profile></profile>
</div>


@endsection

@section('footer')
@include('layouts.footerlogin')   
@endsection
