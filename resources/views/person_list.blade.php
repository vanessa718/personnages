@extends('layouts.app') 


@section('content')
<section class="container">
	<div class="row person">	
  		<h1>Personnes</h1>
	</div>
	<div class="table-responsive">
	  	<table class="table">
	  		<tbody>
	  			<tr>
  					@foreach ($personnes as $personne)
				  		<td class="cell">{{$personne ['name']}}</td>
				  		<td class="cell"><a href="{{action('PersonneController@show', $personne['id'])}}" class="btn btn-dark btn-view">Voir</a></td>

						@if ($personne ['id'] %3 == 0)
							</tr><tr>
						@else 
							<td class="space"></td>
						@endif		 

  					@endforeach
  				</tr>
  			</tbody>
		</table>	
	</div>
</section>
@endsection