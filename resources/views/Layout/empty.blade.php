<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admission System</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

 
		@include('includes.head-include');

	</head>

	@include('includes.footer-include')


	<body class="no-skin">
	 

		<div class="main-container ace-save-state" id="main-container"> 		 

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="page-header">
							<h1>
								@yield('LayoutTitle')
								 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								@yield('content')

								<!-- // PAGE CONTENT BEGINS -->
							</div>	 
						</div>		 
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			@include('includes.footer')

		 
		</div><!-- /.main-container -->

		<!-- basic scripts -->



	 
		 
	</body>
</html>
