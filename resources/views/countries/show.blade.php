@extends('layouts.master')
@section('content')

<div class="container">
        <br>
        <br>
        <br>
    <table class="table">
        <tr>
            <td>ID</td><td>{{ $country->id }}</td>
        </tr>
        <tr>
            <td>Country name</td><td>{{ $country->name }}/td>
        </tr>
        <tr>
            <td>Phone code</td><td>{{ $country->phone_code }}</td>
        </tr>
        <tr>
            <td>Country id </td><td>{{ $country->country_id }}</td>
        </tr>
        <tr>
            <td>Adress id </td><td>{{ $country->adress_id }}</td>
        </tr>
    </table>
</div>

@endsection