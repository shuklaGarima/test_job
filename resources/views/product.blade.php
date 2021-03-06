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
                    @if(Session::has('success'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-error"><span class="glyphicon glyphicon-ok"></span><em> {!! session('error') !!}</em></div>
                    @endif
                    <a href="{{ url('/home') }}" class="btn btn-info btn-sm"></i>Home</a>
                    <table>
                        @if(!empty($product))
                        <tr>
                            <td>
                                 <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <a href="{{ url('product-detail/'.$product->id) }}"><img src="{{ $product->photo }}" width="200" height="200"></a>
                                <div class="caption">
                                    <h4>{{ $product->name }}</h4>
                                    <p>{{ $product->description}}</p>
                                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                                    <p><strong>Quantity: </strong>
                                       {{ $product->quantity }}
                                    </p>
                                    <p><strong>Color: </strong> {{ $product->color }}</p>
                                    <p><strong>Sizes: </strong> {{$product->size }}</p>

                                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                                </div>
                            </div>
                        </div>
                            </td>
                        </tr>
                        @endif
                    </table>
                      
                
            </div>
        </div>
    </div>
</div>
@endsection
