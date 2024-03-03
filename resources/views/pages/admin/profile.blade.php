@extends('layout.admin-master')

@section('page_title')
profile
@endsection

@section('content')



	<div class="dashboard-tlbar d-block mb-4">
		<div class="row">
			<div class="colxl-12 col-lg-12 col-md-12">
				<h1 class="mb-1 fs-3 fw-medium">Update Profile</h1>
			
			</div>
		</div>
	</div>
	
	<div class="dashboard-widg-bar d-block">
	
		
		
		<!-- Card Row -->
		<div class="card">
			<div class="card-header">
				<h4>Basic Detail</h4>
			</div>
			<div class="card-body">
				<form>
					<div class="row">
					
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Employer Name</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Email ID</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Phone No.</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Website</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Founded Year</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Company Category</label>
								<div class="select-ops">
									<select>
										<option value="1">Web & Application</option>
										<option value="2">Banking Services</option>
										<option value="3">UI/UX Design</option>
										<option value="4">IOS/App Application</option>
										<option value="5">Education</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Company Size</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Video</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="form-group">
								<label>About Company</label>
								<textarea class="form-control ht-80"></textarea>
							</div>
						</div>
						
					</div> 
				</form>
			</div>
		</div>
		<!-- Card Row End -->
		
	
		
		<!-- Card Row -->
		<div class="card">
			<div class="card-header">
				<h4>Contact Detail</h4>
			</div>
			<div class="card-body">
				<form>
					<div class="row">
					
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Your Email</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Phone no.</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Temporary Address</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Address 2</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Country</label>
								<div class="select-ops">
									<select>
										<option value="1">India</option>
										<option value="2">United State</option>
										<option value="3">United kingdom</option>
										<option value="4">Austrailia</option>
										<option value="5">Russia</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>State/City</label>
								<div class="select-ops">
									<select>
										<option value="1">California</option>
										<option value="2">Denver</option>
										<option value="3">New York</option>
										<option value="4">Canada</option>
										<option value="5">Poland</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Zip Code</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>Latitude</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="form-group">
								<label>longitude</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
					</div> 
				</form>
			</div>
		</div>
		<!-- Card Row End -->
		
	
		
		<!-- Submit Busston -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<button type="submit" class="btn ft--medium btn-primary">Save Profile</button>
			</div>	
		</div>
		
	</div>
					
                    
					
					
					


                    	


@endsection