@extends('layouts.master_layout')
    
    
@section("title","Items page")


@section('content')

    @foreach($items as $item)
					
			
	          		
				  <div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">{{$item['name']}}</a></h4>
					  <a href="{{ URL::to('/item/show/'.$item['name']) }}"><img src="{{$item['image']}}" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{$item['price']}}</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				@endforeach
					
@endsection    
    