@extends('layouts.master')
@section('content')

<div class="container">
    <form action="/states/index" method="POST" class="form-control">
        @csrf
        <table class="table">
            <th>Add a new state :</th>
            <tr>
                <td><label for="">State :</label></td>
                <td><input type="text" name="name" class="@if ($errors->has('name')) {is-invalid} @endif"></td>
            </tr>
            <tr>
                <td><label for="">Country :</label></td>
                <td>
                    <section name="country" class="form-control">
                        @foreach
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </section>
                </td>
            </tr>
            <tr>
                    <td><label for="">Adress :</label></td>
                    <td>
                        <section name="adress" class="form-control">
                            @foreach
                            <option value="{{ $adress->id }}">{{ $adress->name }}</option>
                            @endforeach
                        </section>
                    </td>
                </tr>
            <tr>
                <td></td>
                <td><button class="btn-success" type="submit">ADD</button></td>
            </tr>
        </table>
    </form>
</div>

@endsection