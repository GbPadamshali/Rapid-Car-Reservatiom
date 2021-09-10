@extends('admin.theme.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
        	<div class="col-12">
                <div class="card">
                	<div class="card-header">
                        <h4 class="card-title">Details</h4>
                    </div>
                    <div class="card-body">
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Name</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $car->name }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Make</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $car->make }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Model</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $car->model }} </div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Year of built</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $car->year_built }}</div>
                    	</div>
                    	<hr>
                    </div>

					<div class="mb-2 ">
						@if(isset($car->image))  
		                @if(count($car->image)>0)
		                @foreach($car->image as $image)
		                <div class="col-md-4">
		                  <div class="avatar-icon rounded mt-2" style="min-width: 240px; min-height: 120px;">
		                  @if(!empty($image->image) && file_exists(public_path('theme/images/cars/thumbnail/'.$image->image)) ) 
		                    <?php 
		                    $image = url('theme/images/cars/thumbnail/'.$image->image); 
		                    ?>
		                 	<img src="{{$image}}" class="shadow" style="min-height: 120px;max-height: 120px; max-width: 240px; border-radius: 10px;">
		                  	@endif
		                </div>
		                </div>
		                @endforeach 
		                @endif  
		                @endif  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection