<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
	<!--end::Fonts-->

	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="./assets/css/style.css?v=1.0" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->

	<link href="./assets/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css" />
	<link href="./assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	
	<link href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->


<!---- Page contents-->
@yield('contents')
<!-- //Page contents-->

@yield('js')

</html>