@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>
                    Entrer vos information
                </h2>
            </div>
        </div>
        <div class="card-body">
            <form action="">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first_name">First Name :</label>
                            <input type="text" name="first_name" id="first_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first_name">Last Name :</label>
                            <input type="text" name="last_name" id="last_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user_name">User Name :</label>
                            <input type="text" name="user_name" id="user_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="text" name="password" id="password">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection