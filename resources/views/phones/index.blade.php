@extends('layouts.master')
@section('content')

<div class="container">
        <br>
        <br>
        <br>
        <h2>List of all countries</h2>
    <table class="table" >
        <tr>
            <td>ID</td>
            <td>Country name</td>
            <td>Phone code</td>
        </tr>
            @foreach($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->name }}</td>
                <td>{{ $country->phone_code }}</td>
            </tr>
            @endforeach
    </table>
</div>

@endsection