@extends('layouts.master')
@section('content')

<div class="container">
        <br>
        <br>
        <br>
        <h2>List of all states</h2>
    <table class="table" >
        <tr>
            <td>State </td>
            <td>Country name</td>
        </tr>
            @foreach($states as $state)
            <tr>
                <td>{{ $state->name }}</td>
                <td>{{ $state->country->name }}</td>
            </tr>
            @endforeach
    </table>
</div>

@endsection