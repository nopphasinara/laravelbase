@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  /* Basics */
body {Margin: 0;padding: 0;	min-width: 100%;background-color: #e2e2e2;}
table {border-spacing: 0;font-family: sans-serif;color: #333333;}
td {padding: 0;}
img {border: 0;}
.wrapper {width: 100%;table-layout: fixed;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;}
.webkit {max-width: 600px;}
.outer {Margin: 0 auto;	width: 100%;max-width: 600px;}
.inner {padding: 10px;}
a {	color: #ee6a56;	text-decoration: underline;}
.h1 {font-size: 21px;font-weight: bold;	Margin-bottom: 18px;}
.h2 {font-size: 18px;font-weight: bold;	Margin-bottom: 12px;}
.full-width-image img {width: 100%;	max-width: 600px;height: auto;}
/* One column layout */
.one-column .contents {	text-align: left;}
.one-column p {	font-size: 14px;Margin-bottom: 10px;}

/*Media Queries*/
@media screen and (max-width: 400px) {
	.two-column .column,
	.three-column .column {
		max-width: 100% !important;
	}
	.two-column img {
		max-width: 100% !important;
	}
	.three-column img {
		max-width: 50% !important;
	}
}

@media screen and (min-width: 401px) and (max-width: 620px) {
	.three-column .column {
		max-width: 33% !important;
	}
	.two-column .column {
		max-width: 50% !important;
	}
}

  </style>
@endpush

@section('content')
      <center class="wrapper">
          <div class="webkit">
              <!--[if (gte mso 9)|(IE)]>
  			<table width="600" align="center">
  			<tr>
  			<td>
  			<![endif]-->
  			<table class="outer" align="center">
  			    <tr>
  			        <td class="full-width-image">
  			            <img src="https://tutsplus.github.io/creating-a-future-proof-responsive-email-without-media-queries/images/header.jpg" width="600" alt="Gaadiexpert ogo" />
  			        </td>
  			    </tr>
  			    <tr>
  			        <td class="one-column">
  			            <table width="100%">
  			                <tr>
  			                    <td class="inner contents" bgcolor="ffffff">
  			                        <p class="h1">Forgot your Password? </p>
  			                        <p>We received a request to reset your instagram's password.</p>
  			                        <p>To reset your new password. The link will be active for one hour. </p>
  			                        <p>If your ignore, Password won't be changed.</p>

  			                    </td>
  			                </tr>
  			            </table>
  			        </td>
  			    </tr>
  			    <tr>
  			        <td class="one-column" bgcolor="#f2f2f2">
  			            <table width="100%">
  			                <tr>
  			                    <td class="inner contents">

  			                        <p>All Rights Reserved</p>
  			                    </td>
  			                </tr>
  			            </table>
  			        </td>
  			    </tr>

  			</table>
          </div>
      </center>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
