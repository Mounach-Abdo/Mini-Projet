@extends('layouts.master')
@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <table class="table">
        <form action="/countries" method="POST" >
            @csrf
            <th>Add a new country :</th>
            <tr>
                <td><label for="">Country :</label></td>
                <td><input type="text" name="name" class=" @if($errors->has('country')) is-invalid @endif "></td>
                </tr>
            <tr>
                <td><label for="">Phone code :</label></td>
                <td><input type="text" name="phone"  class="  @if($errors->has('country')) is-invalid @endif "></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn-success" type="submit">ADD</button></td>
            </tr>
        </form>
    </table>
</div>

@endsection