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
                    			<h6 class="mb-0">Car</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->car->name }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Company</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->company->name }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Bank</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->bank->name }} </div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Cost</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->cost }}</div>
                    	</div>
                    	                	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Title</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->title }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Vin number</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->vin_number }} </div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Licence plate number</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->licence_plate_number }}</div>
                    	</div>
                    	<hr>                	
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Register due date</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{  date('d-m-Y', strtotime( $vehicle->reg_due_date)) }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Date of purchase</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{  date('d-m-Y', strtotime( $vehicle->date_of_purchase))  }} </div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Registration city</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->registration_city }}</div>
                    	</div>
                    	<hr>                	
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">City sticker expiry</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{  date('d-m-Y', strtotime( $vehicle->city_sticker_expiry))  }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Insurance company</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->insurance_company }} </div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Insurance policy number</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{ $vehicle->insurance_policy_number }}</div>
                    	</div>
                    	<hr>               	
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Insurance till date</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{  date('d-m-Y', strtotime($vehicle->insurance_till_date))  }}</div>
                    	</div>
                    	<hr>
                    	<div class="row">
                    		<div class="col-sm-3">
                    			<h6 class="mb-0">Inspection till date</h6>
                    		</div>
                    		<div class="col-sm-9 text-secondary">{{   date('d-m-Y', strtotime($vehicle->inspection_till_date))  }} </div>
                    	</div>
                    	<hr>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection