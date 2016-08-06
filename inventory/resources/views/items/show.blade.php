@extends('layouts.item_advert_layout');

@section('title',$item['name'])

@section('single_item')
    <div class="single_item">

        Item Name = {{ $item['name'] }}
        <br/>
        Price = {{ $item['price'] }}
    
    </div>
@endsection