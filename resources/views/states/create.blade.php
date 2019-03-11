@extends('layouts.master')
@section('content')

<div class="container">
    @csrf
    <table class="table">
            <form action="/states" method="POST" class="form-control">
                @csrf
<th>Add a new country :</th>
<tr>
    <td><label for="">State :</label></td>
    <td><input type="text" name="state" class=""></td>
</tr>
<tr>
    <td><label for="">Country :</label></td>
    <td><select type="text" name="country">
        @foreach ($countries as $country)
        <option value="{{ $country->id }}"> {{ $country->name }}</option>
        @endforeach
        </select>
    </td>
</tr>
<tr>
<td></td>
<td><button class="btn-success" type="submit">ADD</button></td>
</tr>
</form>
</table>
</div>

@endsection