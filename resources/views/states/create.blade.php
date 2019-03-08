@extends('layouts.master')
@section('content')

<div class="container">
    <form action="/countries/index" method="POST" class="form-control">
@csrf
<table class="table">
<th>Add a new country :</th>
<tr>
    <td><label for="">Country :</label></td>
    <td><input type="text" name="country" class="@if ($errors->has('name')) {is-invalid} @endif"></td>
</tr>
<tr>
    <td><label for="">Phone code :</label></td>
    <td><input type="text" name="phone"></td>
</tr>
<tr>
<td></td>
<td><button class="btn-success" type="submit">ADD</button></td>
</tr>
</table>
    </form>
</div>

@endsection