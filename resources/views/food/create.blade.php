@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Donate Food</div>

                <div class="card-body">
                    <form action="/food" method="POST">
                        <div class='form-group'>
                            @csrf
                            <input name='title' type='text' class='form-control' placeholder='what type of food would you like to donate?' /> 
                            <br>
                            <input name='body' type='text' class='form-control' placeholder='explain food' />                   <br>
                            <input type='submit' value='donate food'>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
