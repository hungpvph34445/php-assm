@extends('layout.main')
@section('content')
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
<ul>
    @foreach ($_SESSION['errors'] as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
<samp>{{$_SESSION['success']}}</samp>
@endif
<form action="{{route('store')}}" method="post">
    <label for="">ten</label>
    <input type="text" name="name">
    <label for="">name sinh</label>
    <input type="text" name="year_of_brith">
    <label for="">so dt</label>
    <input type="text" name="phone_number">

    <input type="submit" name="btn-submit" value="gui">
</form>
@endsection