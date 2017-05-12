<div class="col-md-12 oii-top-banner">
</div>


<div class="col-md-12 breathing-space">

	<div class="row">
		<div class="col-md-offset-2 col-md-2">
			<img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/particle-box.png" width="100%"/>
			<hr/>
			<a href="{{ URL::to('/') }}/login"><h4>Login</h4></a><hr/>
			<a href="{{ URL::to('/') }}/create"><h4>Register</h4></a><hr/>
		</div>

		<div class="col-md-6 scigap-info">
			<h1 >Nano Confinement Science Gateway</h1>
			<p style="color:#cccccc;">
				<h2>Welcome!</h2><br/> The Nano Confinement Science Gateway enables users to explore the effects of high electrolyte concentrations, multivalent ions, dielectric contrasts, and external electric field on the ionic distributions.
                Sample use cases include the study of Role of dielectric contrast; Role of valency of ions; Role of varying salt concentration; Role of making the interface permeable and Role of charged interface
            <br/>
			</p>
			<hr/>
			<button class="btn btn-primary btn-lg">Car-Parrinello Molecular Dynamics</button>
			<p style="font-size:14px; margin-top:20px;">
                Simulation of ions in media with piecewise-uniform dielectric response employing Car- Parrinello molecular dynamics method of dynamical optimization allowing for a faster, accurate, and stable computation of dielectric effects via an on-the-fly evaluation of the induced charge at the dielectric interfaces.
			</p>

            <button class="btn btn-primary btn-lg">Accelerate Research</button>
            <p style="font-size:14px; margin-top:20px;">
                Powered by Computational Resources and Indiana University and Extreme Science and Engineering Discovery Environment (XSEDE), the gateway provides the MD simulations as a service.
            </p>

		</div>
	</div>

	<div class="row">
		<div class="col-md-offset-2 col-md-8">

		</div>
	</div>

	<h1 class="text-center">Publications</h1>
	<div style="width: 92%; margin-left: 5%; padding-left:15px">
		<table>
			<tr>
				<td width="100px"><img id="myImg2" alt="Material Simulations" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/material-simulation.png" style="width:100%"></img></td>
				<td>
					<p  class="text-left" style="margin-left: 25px"><A href="http://aip.scitation.org/doi/10.1063/1.4935704" target="_blank">
							Jing, Yufei, Vikram Jadhao, Jos W. Zwanikken, and Monica Olvera de la Cruz. "Ionic structure in liquids confined by dielectric interfaces." The Journal of chemical physics 143, no. 19 (2015): 194508.

				</td>
			</tr>
		</table>
	</div>

	<br style="clear:both"/>
	<hr style="color:green"/>

</div>

