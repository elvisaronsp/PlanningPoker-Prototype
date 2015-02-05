@extends('layouts.mobile.app')

@section('content')
<!-- <div layout="column" layout-margin style="padding:25px;">
  <md-progress-linear md-mode="indeterminate"></md-progress-linear>
</div> -->


<div layout="row" layout-align="center center">
	<div>
	  	<md-card class="cards-users">
		  	<div layout="column" layout-margin>
				<div layout="row" layout-align="center center">
				  	<div flex flex-order="1">
					    <md-card class="text-center">
					      <img class="img-responsive" src="img/user.png" alt="Henk's foto">
					      <md-card-content>Henk</md-card-content>
					    </md-card>
				  	</div>
				  	<div flex flex-order="2">
					    <md-card class="text-center">
					      <img src="img/user.png" alt="David's foto">
					      <md-card-content>David</md-card-content>
					    </md-card>
				  	</div>
					  	<div flex flex-order="3">
					    <md-card class="text-center">
					      <img src="img/user.png" alt="Joep's foto">
					      <md-card-content>Joep</md-card-content>
					    </md-card>
					</div>
				</div>
			</div>
		</md-card>
		<div>
			<md-progress-linear md-mode="indeterminate"></md-progress-linear>
		</div>
	</div>
</div>
@endsection
