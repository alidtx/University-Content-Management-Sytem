@extends('frontend.layouts.app')

@section('title', 'Demo Page')


@section('my_style')

@endsection


@section('content')

<section class="counter-numbers my-4" style="padding-top: 250px; background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <h3 class="text-center text-white">At a Glance</h3>
    </div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-3">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Total Area</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-map"></i> 50 Acres
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Inauguration</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-id-badge"></i> 8 February, 2006
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Establishment</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-map-alt"></i> 28 May, 2006
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Classes start</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-layout-list-thumb"></i> 28 May, 2007
					    </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="card my-3">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Inaugural Departments</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) English<br><br>
							(2) Economics<br><br>
							(3) Public Administration<br><br>
							(4) Mathematics<br><br>
							(5) Management Education<br><br>
							(6) Accounting and Information Systems<br><br>
							(7) Marketing
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="row">
					<div class="col-12 col-sm-6">
						<div class="card my-3">
							<div class="card-header bg-primary">
							    <h5 class="card-title my-font m-0 p-0 text-white">Faculties</h5>
							</div>
							<div class="card-body">
							    <p class="card-text h4">
							    	<i class="ti-package"></i> Number of Faculties 6
							    </p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="card my-3">
							<div class="card-header bg-primary">
							    <h5 class="card-title my-font m-0 p-0 text-white">Current Departments</h5>
							</div>
							<div class="card-body">
							    <p class="card-text h4">
							    	<i class="ti-panel"></i>  Number of Departments 19
							    </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header bg-primary">
							    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of Business Studies</h5>
							</div>
							<div class="card-body">
							    <p class="card-text h4">
							    	(1) Management Education<br><br>
									(2) Accounting and Information Systems<br><br>
									(3) Marketing<br><br>
									(4) Finance and Banking
							    </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of Science</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) Mathematics<br><br>
							(2) Physics<br><br>
							(3) Chemistry<br><br>
							(4) Statistics<br><br>
							(5) Pharmacy
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of Social Sciences</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) Economics <br><br>
							(2) Public Administration <br><br>
							(3) Anthropology <br><br>
							(4) Mass Communication and Journalism<br><br>
							(5) Archaeology
					    </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of Arts and Humanities</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) English<br><br>
							(2) Bengali
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of Engineering</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) Computer Science and Engineering <br><br>
							(2) Information and Communication Technology
					    </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty of LAW</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	(1) Law<br>
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Total Students</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-user"></i> 5965 Students
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Faculty Members</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-crown"></i> 266 Faculties
					    </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-3">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Number of Officers</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-home"></i> 96 Offices
					    </p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card my-4 ">
					<div class="card-header bg-primary">
					    <h5 class="card-title my-font m-0 p-0 text-white">Number of staffs</h5>
					</div>
					<div class="card-body">
					    <p class="card-text h4">
					    	<i class="ti-medall"></i> 207 Office stuffs
					    </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection



@section('java_script')
@endsection