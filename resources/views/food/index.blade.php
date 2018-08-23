@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <foods inline-template>
                <div>
                    <food v-for='(food, index) in foods' :key="index" :food='food' inline-template>
                        <div class="card">
                            <div class="card-header">
                                @{{ food.amount }}
                                @{{ food.title }}
                                <br>
                                @{{ donator }}
                                <br>
                                Food Type: @{{ food.type }}

                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input name='amount' type= 'number' class='form-control' placeholder='amount of food' :min="this.amount" :max='food.amount' required/>
                                    </div>
                                    <div class="col-sm-4">
                                        <button style='width:100%' class='btn btn-primary'>
                                            Request Item
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </food>
                </div>
            </foods>
        </div>
    </div>
</div>
@endsection
