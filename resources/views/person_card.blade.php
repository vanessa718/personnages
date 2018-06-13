@extends('layouts.app') 


@section('content')
<section>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<img src="/img/avatar.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center line">
	  			<p class="name">{{$personne -> name}}</p>
	  			<p class="job">{{$personne -> job}}</p>
	  			<hr />
	  		</div>	
	  	</div>
	  	<div class="row">
	  		<div class="col biography">
	  			<p>{{$personne -> biography}}</p>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<!-- <div class="col-md-12"> -->
		  		<div class="col-md-6 text-left">
		  			<p>{{$personne -> address}}</p>
		  			<p>{{$personne -> town}}</p>
		  		</div>
		  		<div class="col-md-6 text-right">
		  			<p>{{$personne -> mail}}</p>
		  			<p>{{$personne -> phone}}</p>
		  		</div>
		  	<!-- </div>	 -->
	  	</div>
	</div>
  
      
</section>
@endsection