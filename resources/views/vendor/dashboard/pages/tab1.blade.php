@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  /* Global Styles */
@import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
*, *:  before, *:after {
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
}
body {
    width: 100%;
    height: 100%;
    font-family: "Source Sans Pro",  "Helvetica Neue",  Helvetica,  Arial,  sans-serif;
    overflow-x: hidden;
    position:relative;
}
html {
    width: 100%;
    height: 100%;
}

a:hover{
    text-decoration:none;
}
/*page styling*/
.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-right-panel{
	padding: 10px;
	width:100%;
	float:none;
	text-align:center;
	margin:0 auto;
}
.bs-right-panel img{
	width:100%;
	margin:0;
	padding:0;

}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4,
.bs-callout h5 {
    margin-bottom: 10px;
    margin-top: 5px;
    font-weight: 600;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4,
.bs-callout-danger h5{
    color: #d9534f;
}

.header-title {
    color: #fff;
}
.title-thin {
	font-weight: 300;
}
.service-item {
	margin-bottom: 30px;
}
  </style>
@endpush

@section('content')
  <div id="navbar-example">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#attributes" role="tab">Attributes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Training, Clearance & Education</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#experience" role="tab">Experience</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#schools" role="tab">Schools</a>
          </li>
      </ul>

      <!-- Tab panes {Fade}  -->
      <div class="tab-content">
          <div class="tab-pane fade in active" id="attributes" name="attributes" role="tabpanel">
              <div class="bs-callout bs-callout-danger">
      			<h4>Professional Attributes</h4>
      			<ul class="list-group">
      				<li class="list-group-item">Five years of experience in Web Technology and Mission Command facilitating knowledge flow, enhancing collaborative understanding, enabling learning and promoting efficient decision-making by exceeding expectations.</li>
      				<li class="list-group-item">Consistently honored as an effective and proven Information Management consultant, who leads, coaches, and trains internal and external customers.</li>
      				<li class="list-group-item">Acknowledged by peers as a dedicated, versatile, innovative, and cost conscious problem solver with a high degree of analytical ability to gather, assemble, analyze facts, draw conclusions, and devise solutions to problems which will increase efficiency.</li>
      				<li class="list-group-item">Recognized for extensive experience in converting capabilities and design requirements within a collaborative environment into working solutions and then communicating recommended solutions.</li>
      				<li class="list-group-item">Honored for expertize in the field of Enterprise SharePoint and "Vendor neutral" Web Design on Site Creation, Content Management, Design, consolidation, and integration.</li>
      				<li class="list-group-item">Overseen, managed, and developed various Department of Defense web sites based on industry best practices to include conceptual requirements, analysis, design, implementation, deployment and maintenance.</li>
      				<li class="list-group-item">Proficient in a range of operating systems, languages, tools and testing methodologies.</li>
      			</ul>
      			<table class="table">
      				<tbody>
      					<tr>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Customer Service & Support</b></td>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Mission Planning Specialist</b></td>
      					</tr>
      					<tr>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>System, Web & Software Engineering</b></td>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Network Troubleshooting & Administration</b></td>
      					</tr>
      					<tr>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>E-Learning Development</b></td>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Web Design & Development</b></td>
      					</tr>
      					<tr>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Project Management</b></td>
      						<td><i class="fa fa-lg fa-check"></i> </td>
      						<td><b>Battle Staff Process Improvement</b></td>
      					</tr>
      				</tbody>
      			</table>
      		</div>
          </div>
        <div class="tab-pane fade" id="profile" role="tabpanel">
            <div class="bs-callout bs-callout-danger" id="certifications" name="certifications">
  				<h4>Certifications</h4>
  				<table class="table">
  					<tbody>
  						<tr>
  							<td><b>CompTIA Security+ CE</b></td>
  							<td><b>2016</b></td>
  						</tr>
  						<tr>
  							<td><abbr title="Microsoft Certified Systems Administrator">MCSA</abbr>: Windows Server 2012</td>
  							<td>2016 &dash; <b><i>Pending</i></b></td>
  						</tr>
  						<tr>
  							<td><abbr title="CompTIA Cisco Certified Network Associate">CCNA</abbr></td>
  							<td>2016 &dash; <b><i>Pending</i></b></td>
  						</tr>
  					</tbody>
  				</table>
  			</div>
  			<div class="bs-callout bs-callout-danger" id="skills" name="skills">
  				<h4>Language and Platform Skills</h4>
  				<div class="text-xs-center" id="web_dev">HTML/CSS/JavaScript… 90%</div>
  				<progress class="progress progress-striped progress-success" value="90" max="100">
  				    <span class="sr-only">90%</span>
  				</progress>
  				<div class="text-xs-center" id="infosec">Information Security… 40%</div>
                  <progress class="progress progress-striped progress-warning" value="40" max="100">
                      <span class="sr-only">40%</span>
                  </progress>
                  <div class="text-xs-center" id="bootstrap_xp">Twitter Bootstrap… 90%</div>
                  <progress class="progress progress-striped progress-success" value="90" max="100">
                      <span class="sr-only">90%</span>
                  </progress>
                  <div class="text-xs-center" id="fe_framework">NodeJS/ MEAN stack/ AngularJS… 30%</div>
                  <progress class="progress progress-striped progress-danger" value="30" max="100">
                      <span class="sr-only">30%</span>
                  </progress>
                  <div class="text-xs-center" id="server_code">PHP/ SQL… 60%</div>
                  <progress class="progress progress-striped progress-warning" value="60" max="100">
                      <span class="sr-only">60%</span>
                  </progress>
                  <div class="text-xs-center" id="jquery">jQueryL… 50%</div>
                  <progress class="progress progress-striped progress-warning" value="50" max="100">
                      <span class="sr-only">50%</span>
                  </progress>
                  <div class="text-xs-center" id="MSSP">Microsoft SharePoint 2010/2013 Administration… 70%</div>
                  <progress class="progress progress-striped progress-success" value="70" max="100">
                      <span class="sr-only">70%</span>
                  </progress>
                  <div class="text-xs-center" id="CMS"><abbr title="WordPress, Joomla!, Drupal">Content Management Systems … 60%</abbr></div>
                  <progress class="progress progress-striped progress-success" value="60" max="100">
                      <span class="sr-only">60%</span>
                  </progress>
                  <div class="card-group">
                      <div class="card card-inverse card-danger text-xs-center">
                          <div class="card-block">
                              <blockquote class="card-blockquote">
                                  <p>I Suck<br>
                                      <small class="text-muted"><em>0% - 39%</em></small>
                                  </p>
                              </blockquote>
                          </div>
                      </div>
                      <div class="card card-inverse card-warning text-xs-center">
                          <div class="card-block">
                              <blockquote class="card-blockquote">
                                  <p>I know little<br>
                                      <small class="text-muted"><em>40% - 60%</em></small>
                                  </p>
                              </blockquote>
                          </div>
                      </div>
                      <div class="card card-inverse card-success text-xs-center">
                          <div class="card-block">
                              <blockquote class="card-blockquote">
                                  <p>I'm a guru<br>
                                      <small class="text-muted"><em>70% - 90%</em></small>
                                  </p>
                              </blockquote>
                          </div>
                      </div>
                      <div class="card card-inverse card-primary text-xs-center">
                          <div class="card-block">
                              <blockquote class="card-blockquote">
                                  <p>I'm Good<br>
                                      <small class="text-muted"><em>91% - 100%</em></small>
                                  </p>
                              </blockquote>
                          </div>
                      </div>
                  </div>
  			</div>
  			<div class="bs-callout bs-callout-danger" id="clearance" name="clearance">
  				<h4>Security Clearance</h4>
  				<ul class="list-group">
  					<a href="#" class="list-group-item list-group-item-action">
  						<h4 class="list-group-item-heading">
  						TOP SECRET/SCI - ACTIVE
  						</h4>
  						<p class="list-group-item-text">
  							<strong>Investigation Date:</strong> SSBI from OPM; Closed 2012 03 14
  						</p>
  						<p class="list-group-item-text">
  							<strong>Adjudication Date:</strong> Determined eligibility of SCI &dash; DCID 8/4 on 2012 03 21 Army CCF
  						</p>
  					</a>
  				</ul>
  			</div>
        </div>
        <div class="tab-pane fade" id="experience" name="experience" role="tabpanel">
          <div class="bs-callout bs-callout-danger">
  			<h4>Prior Experiences</h4>
  			<ul class="list-group">
  				<a class="list-group-item list-group-item-action inactive-link" href="#">
  					<table class="table">
  						<tbody>
  							<tr>
  								<td>
  									<h4>Lukos &dash; Peterson AFB, CO</h4>
  								</td>
  								<td><h4 class="pull-right"><b>2016 &dash; Present</b></h4></td>
  							</tr>
  						</tbody>
  					</table>
  					<h4 class="list-group-item-heading">
  						Battle Staff Process Improvement Engineer
  					</h4>
  					<p class="list-group-item-text">
  					Responsible for the mapping of five Strategic Joint Combatant Command Battle Staff processes, using the Lean Six Sigma (LSS) Process Improvement model as the basis for the technical solution. This included defining and documenting each task in detail, and analyzing each process for discrepancies and compliance with established Military Doctrine and Joint military operational planning procedures at the strategic level. Next, collect analytical metric data to use for overall process efficiency, provide recommendations for overall process improvements, and implement refined procedures to mitigate process inefficiency.
  					</p>
  					<ul>
  						<li>
  						Successfully documented and mapped the NORAD/USNORTHCOM Command Center (N2C2) internal Battle Staff Capability Management Global force allocation process by integrating Joint military operational planning procedures, doctrinal guidance, and the Lean Six Sigma process, resulting in overall process efficiency.
  						</li>
  						<li>
  						Developed and refined the N2C2 Strategic Command Operational Orders and Messages process facilitating process improvement by mapping each stage of the process, developed swim lanes to mitigate error, and Performed as Knowledge Management Technical manager in implementing a Government Off-The-Shelf solution for orders and message tracking.
  						</li>
  						<li>
  						Provided collaboration and joint staff cooperation through the use of Enterprise SharePoint team sites, promoting efficient knowledge flow.
  						</li>
  						<li>
  						Responsible for the creation, administration and editing of site content, design & user interface, and oversight of technical issues related to the Enterprise SharePoint team site.
  						</li>
  					</ul>
  				</a>
  				<a class="list-group-item list-group-item-action inactive-link" href="#">
  					<table class="table">
  						<tbody>
  							<tr>
  								<td>
  									<h4>BOECORE &dash; Peterson AFB, CO</h4>
  								</td>
  								<td><h4 class="pull-right"><b>2015 &dash; 2016</b></h4></td>
  							</tr>
  						</tbody>
  					</table>
  					<h4 class="list-group-item-heading">
  						Command Information Management System II (CIMS II) Mission Planning Specialist
  					</h4>
  					<p class="list-group-item-text">
  					Responsible for the administration of web-based thin client applications, providing rapid integrated planning and situational awareness within a collaborative environment with geospatial-temporal situational awareness tools supporting access to net-centric data. I Orchestrated enterprise services for integrated joint course of action (COA) development across diverse mission areas and combatant commands. This includes the critical fields of space operations, space control, missile operations, global strike (kinetic/non-kinetic and nuclear/non-nuclear), information operations, intelligence, and nuclear command and control (NC2).
  					</p>
  					<ul>
  						<li>
  						Provided Expert Global Adaptive Planning Collaborative Information Environment (GAP CIE) Joint Operation Planning web application Support to assist with joint operation planning using the capabilities within GAP CIE for Deliberate and Crisis Action Planning (CAP), to include: Plan Design and Assessment (PD&A), Integrated Crisis Early Warning System (ICEWS), Course of Action (COA) development, Joint Intelligence Preparation of the Operational Environment (JIPOE), orders and message construction, GSAT, and Dashboard to support real-world or exercise operations.
  						</li>
  						<li>
  						Supported USSTRATCOM operations by defining and refining GAP CIE capabilities for Deliberate and CAP, PD&A, ICEWS, COA development, JIPOE, orders and message construction, and GSAT, to include the Dashboard, to execute the Command's missions. Singlehandedly overseen proper tools/applications/web services ultimately, meeting operational and training needs.
  						</li>
  						<li>
  						Provided integration of web and portal requirements into the C2 architecture and technical systems/applications.
  						</li>
  						<li>
  						Conducted system level testing and developed required Development Lifecycle documentation for nummerous projects including SharePoint 2013 and GAP CIE.
  						</li>
  						<li>
  						Provided requirements development and refinement, providing both technical and administrative support to USASMDC/ARSTRAT, components and subordinated units.
  						</li>
  						<li>
  						Provided requirements development and refinement, providing both technical and administrative support to USASMDC/ARSTRAT, components and subordinated units.
  						</li>
  						<li>
  						Defined C2 operational data flow processes, information requirements and capabilities at various DoD, combatant commander (CCDR) and JFCC-level engagements, exercises, and professional forums.
  						</li>
  						<li>
  						Responsible for the development and maintenance of the Command website.
  						</li>
  					</ul>
  				</a>
  				<a class="list-group-item list-group-item-action inactive-link" href="#">
  					<table class="table">
  						<tbody>
  							<tr>
  								<td>
  									<h4>ARMY SPACE & MISSILE DEFENSE CMD &dash; Peterson AFB, CO</h4>
  								</td>
  								<td><h4 class="pull-right"><b>2011 &dash; 2015</b></h4></td>
  							</tr>
  						</tbody>
  					</table>
  					<h4 class="list-group-item-heading">Web Systems Engineer & Knowledge Management Supervisor</h4>
  					<p class="list-group-item-text">
  					Responsible for Web-based Application interface services, Branding, Event Handlers, Business intelligence Key Performance Indicators, Dashboards and Web content. Additionally, I participated in requirements gathering, technical design sessions/reviews, unit and integration testing. Accountable for ensuring efficient and high quality interface deliverables.
  					</p>
  					<ul>
  						<li>
  						Subject Matter Expert in Global Adaptive Planning Collaborative Information Environment (GAP CIE), recommended by USSTRATCOM GAP CIE Functional Manager's to NORAD/NORTHCOM Information Management office to provide suggestions for efficiency and integration.
  						</li>
  						<li>
  						Advocates efficiency of knowledge flow with enhanced shared understanding, learning and decision-making through effective guidance and management of products like the Command Tier I Global Exercise pages and web-based application like GAP CIE.
  						</li>
  						<li>
  						Developed KM Technical Documents facilitating knowledge creation & transfer.
  						</li>
  						<li>
  						Performed as Knowledge Management Technical manager for products like GAP-CIE, under the direction of the Deputy Director for Operations in the Army Space Missile Defense Command.
  						</li>
  						<li>
  						Responsible for the creation, administration and editing of site content, design & user interface, and oversight of technical issues related to the site.
  						</li>
  					</ul>
  					<p></p>
  				</a>
  			</ul>
  		</div>
        </div>
        <div class="tab-pane fade" id="schools" name="schools" role="tabpanel">
           <div class="bs-callout bs-callout-danger">
  			<h4>Schools</h4>
  			<table class="table table-striped table-responsive ">
  				<thead>
  					<tr>
  						<th>Degree, Certificate, or Certification</th>
  						<th>Graduation Year</th>
  						<th><abbr title="If applicable">GPA</abbr></th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr>
  						<td>Associates of Science in Web Design & Development</td>
  						<td>2015</td>
  						<td> 3.14 </td>
  					</tr>
  					<tr>
  						<td>Information Security Professional</td>
  						<td>2015</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Space Cadre Basic Course</td>
  						<td>2015</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Ground-based Midcourse Defense Course</td>
  						<td>2015</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Advanced Leadership and Management Development Course</td>
  						<td>2012</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Basic Leadership and Management Development Course</td>
  						<td>2008</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Advanced Skills Course (Air Defense)</td>
  						<td>2007</td>
  						<td>  </td>
  					</tr>
  					<tr>
  						<td>Basics Skills Course</td>
  						<td>2006</td>
  						<td>  </td>
  					</tr>
  				</tbody>
  			</table>
  		</div>
        </div>
      </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script>
  $(document).ready(function()
{
    $("[rel='tooltip']").tooltip();
});
  </script>
@endpush
