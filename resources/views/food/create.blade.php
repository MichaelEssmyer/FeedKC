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
                            <input name='title' type='text' class='form-control' placeholder='What type of food would you like to donate?' />
                            <br>
                            <input name='amount' type= 'number' class='form-control' placeholder='Amount of food' min='0' />
                            <br>
                            <select name="type" class="form-control" >
                                <option value="Produce">Produce</option>
                                <option value="Proteins">Proteins</option>]
                                <option value="Breads">Breads/Pastries</option>
                                <option value="Nonperishables">Nonperishables</option>
                                <option value="Other">Other</option>
                            </select>
                            <br>
                            <input name = 'experation' type='date' call="'form-control" placeholder='experation date' />
                            <br>
                            <input type='submit' value='Donate food'>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
