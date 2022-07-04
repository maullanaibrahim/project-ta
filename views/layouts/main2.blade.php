<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" 
  data-theme="theme-default"
  data-assets-path="../dist/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
	<!-- Site Title -->
    <title>{{ $title }}  | eProcurement - Sistem Informasi Procurement</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dist/img/favicon/iconym.ico" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="dist/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="dist/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dist/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dist/css/demo.css" />
    <link rel="stylesheet" href="dist/css/mystyle.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="dist/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Helpers -->
    <script src="dist/vendor/js/helpers.js"></script>
    <script src="dist/js/config.js"></script>
</head>
<body>
    <div class="container">
        @yield('container')
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Core JS -->
	<div name="core-js">
		<!-- build:js assets/vendor/js/core.js -->
		<script src="dist/vendor/libs/jquery/jquery.js"></script>
		<script src="dist/vendor/libs/popper/popper.js"></script>
		<script src="dist/vendor/js/bootstrap.js"></script>
		<script src="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
		<script type="text/javascript" src="dist/DataTables/datatables.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/buttons.flash.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/jszip.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/pdfmake.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/vfs_fonts.js"></script>
		<script type="text/javascript" src="dist/DataTables/buttons.html5.min.js"></script>
		<script type="text/javascript" src="dist/DataTables/buttons.print.min.js"></script>

		<script src="dist/vendor/js/menu.js"></script>
		<!-- endbuild -->

		<!-- Vendors JS -->
		<script src="dist/vendor/libs/apex-charts/apexcharts.js"></script>

		<!-- Main JS -->
		<script src="dist/js/main.js"></script>

		<!-- Page JS -->
		<script src="dist/js/dashboards-analytics.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
                new PerfectScrollbar(document.getElementById('vertical-example'), {
                    wheelPropagation: false
                });
			});
		</script>
	</div>
	<!-- / Core JS -->
</body>
</html>