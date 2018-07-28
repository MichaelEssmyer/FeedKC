@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($foods as $food)

            <food :food_id='{{ $food->id }}' inline-template>
                <div class="card">
                    <div class="card-header">
                        {{ $food->title }}
                        {{ $food->donator()->email }}
                        <button class='btn btn-primary float-right' @click="requestFood">Add To Cart</button>
                    </div>

                    <div class="card-body text-center">
                        {{ $food->amount }}
                        {{ $food->type }}
                        <input v-model="amount" name='amount' type= 'number' class='form-control' placeholder='amount of food' :min="this.amount" max='{{ $food->amount }}'/>
                    </div>
                </div>
            </food>
            <hr>    
            @endforeach
        </div>
    </div>
</div>
@endsection
