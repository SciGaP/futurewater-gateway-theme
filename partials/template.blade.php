<div class="nano-top-banner"></div>

<main class="wide" role="main">
<!--
    <div class="bg-crimson bg-image bg-dark section" id="">
        <div class="row">
        <h2>Nanoconfinement Science Gateway enables you to:</h2>

            <div class="one-third text-center">
                <span style="font-size:2em;" class="glyphicon glyphicon glyphicon-th"></span><p>Obtain information about the distribution and assembly of ions in nanoconfinement.</p>
            </div>
            <div class="one-third text-center">
            <span style="font-size:2em;" class="glyphicon glyphicon-th-list">
            <p>Run simulations on IU and XSEDE HPC computational resources.</p>
            </div>
            <div class="one-third text-center">
                <span style="font-size:2em;" class="glyphicon glyphicon glyphicon-share"></span>
                <p>Share your simulation results with your peers.</p>
            </div>
            </ul>
        </div>

        <div class="row text">
            
            <div class="one-half text-center">
                <span style="font-size:1.5em;" class="glyphicon glyphicon-tasks"></span>
                <p>Simulate ions confined between biological and synthetic surfaces that are
                    nanometers apart.
                </p>
            </div>
            <div class="one-half text-center">
            <span style="font-size:1.5em;" class="glyphicon glyphicon-random" ></span>
                <p>Experiment with various ionic and environmental attributes including ion valency and
                    salt concentration.
                </p>
            </div>
        </div>
    </div>
-->

    <div class="breakout bg-none section" id="">
        <div class="row">
            <div class="text">
                <h2>Example</h2>
                <h4>A snapshot showing induced density map produced during a CPMD simulation (center) on one of
                    the interfaces as a result of the instantaneous configuration of ions confined between the
                    two interfaces (left). The induced charges in CPMD match with the exact values (right)
                    signalling the success of the on-the-fly simulation.</h4>
                <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/workflowimage.png"/>
            </div>
        </div>
    </div>

    <div class="bg-crimson bg-dark section" id="">
        <div class="row">
            <div class="one-half">
                <div class="panel--interactive">
                    <p class="title"> Molecular Dynamics (MD)</p>
                    <p>Standard MD techniques provide an accurate estimate for the ionic distribution for a
                        system
                        with no dielectric mismatch across interfaces. The competition between electrostatic and
                        entropic interactions
                        accurately captured in this simulation determines the ionic structure.</p>
                </div>
            </div>
            <div class="one-half">
                <div class="panel--interactive">
                    <p class="title">Car-Parrinello Molecular Dynamics (CPMD)</p>
                    <p>Advanced methods are needed to simulate ions near interfaces with dielectric mismatch.
                        Taking cues from nature, we developed CPMD that enables the simulation of ions in
                        conjunction
                        with the update of the medium’s dielectric response.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="breakout bg-none section" id="">
        <div class="row">
            <div class="one-half">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4>Researchers’ view of a sample result on the Gateway: Ionic distributions within 3 nm confinement
                    for ions of different valency (1,2,3).</h4>
            </div>
            <div class="one-half">
                <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/sample.results.png"/>
            </div>
        </div>
    </div>


    <div class="bg-crimson bg-image bg-dark section" id="">
        <div class="row">
            <div class="text"><h2>Contact Information:</h2>
                <p>The Nanoconfinement Science Gateway is operated by Suresh Marru and Vikram Jadhao. </p>
                <p>Lab Website <a href="https://jadhaolab.engineering.indiana.edu/" target="_blank">https://jadhaolab.engineering.indiana.edu/</a>
                </p>
                <p>Email: <a href="mailto:smarru@iu.edu">smarru at iu.edu</a>, <a href="mailto:vjadhao@iu.edu">vjadhao
                        at iu.edu</a></p>
                <p> The Gateway is based on <a href="https://airavata.apache.org/" target="_blank"> Apache
                        Airavata</a> developed and supported by the <a
                            href="https://sgrc.iu.edu/" target="_blank">IU Science Gateways Research Center.</a>
            </div>
        </div>
    </div>
<!--
    <div class="section bg-none belt" id="contact">
        <div class="row">
            <div class="grid">
                <div class="belt-social invert border">
                    <div class="belt-title" style="margin-bottom: .5em;">
                        <h3>References:</h3>
                    </div>
                    <p style="padding-right:10%;">
                        The following publications describe the nanoconfinement simulation methods and
                        provide useful background. </p>
                    <ul>
                        <li>
                            <a href="http://aip.scitation.org/doi/10.1063/1.4935704" target="_blank">
                                Jing, Yufei, Vikram Jadhao, Jos W. Zwanikken, and Monica Olvera de la Cruz.
                                "Ionic
                                structure in liquids confined by dielectric interfaces." The Journal of Chemical
                                Physics 143, no. 19 (2015): 194508.
                            </a></li>
                        <li>
                            <a href="http://aip.scitation.org/doi/abs/10.1063/1.4789955" target="_blank">
                                Vikram Jadhao, Francisco J. Solis, and Monica Olvera de la Cruz. "A variational
                                formulation
                                of electrostatics in a medium with spatially varying dielectric permittivity"
                                The Journal of Chemical Physics, 138, (2013): 054119.
                            </a></li>
                        <li>
                            <a href="https://journals.aps.org/prl/abstract/10.1103/PhysRevLett.109.223905"
                               target="_blank">
                                Vikram Jadhao, Francisco J. Solis, and Monica Olvera de la Cruz. "Simulation of
                                charged
                                systems in heterogeneous dielectric media via a true energy functional" Physical
                                Review Letters,
                                109, no. 22 (2012): 223905.
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    -->

</main>
