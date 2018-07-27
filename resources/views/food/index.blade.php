@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($foods as $food)

            <food :food='{{ $food }}' :id='{{ auth()->id() }}' inline-template>
                <div class="card">
                    <div class="card-header">
                        {{ $food->title }}
                        <button class='btn btn-primary float-right' @click="requestFood">request food </button>
                    </div>

                    <div class="card-body text-center">
                        {{ $food->body }}
                    </div>
                </div>
            </food>
            <hr>    
            @endforeach
        </div>
    </div>
</div>
@endsection
