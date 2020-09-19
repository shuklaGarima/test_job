@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="container products">
                    <table>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                 <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <a href="{{ url('product-detail/'.$product->id) }}"><img src="{{ $product->photo }}" width="200" height="200"></a>
                                <div class="caption">
                                    <h4>{{ $product->name }}</h4>
                                    <p>{{ $product->description}}</p>
                                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                                    <p><strong>In Stock: </strong>
                                        @if($product->in_stock == '1')
                                        <p>In Stock</p>
                                        @else
                                        <p>Out of Stock</p>
                                        @endif
                                    </p>
                                    <p><strong>Sizes: </strong> {{$product->size }}</p>
                                </div>
                            </div>
                        </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $products->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
