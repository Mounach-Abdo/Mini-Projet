@extends('layouts.master')
@section('content')

<div class="container">
        <br>
        <br>
        <br>
    <table class="table">
        <tr>
            <td>ID</td><td>{{ $state->id }}</td>
        </tr>
        <tr>
            <td>State name</td><td>{{ $state->name }}</td>
        </tr>
    </table>
</div>

@endsection
