    <script src="./assets/js/plugin.bundle.min.js"></script>
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/api/jqueryvalidate/jquery.validate.min.js"></script>
	<script src="./assets/api/apexcharts/apexcharts.js"></script>
	<script src="./assets/api/apexcharts/scriptcharts.js"></script> 
	<script src="./assets/api/pace/pace.js"></script>
	<script src="./assets/api/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./assets/api/quill/quill.min.js"></script>
	<script src="./assets/api/datatable/jquery.dataTables.min.js"></script>
    
	<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
	
	
	<script src="./assets/js/script.bundle.js"></script>
	
	@yield('js')

	<script>
		var options = {
	  debug: 'info',
	  modules: {
		toolbar: '#toolbar'
	  },
	  placeholder: 'Compose an epic...',
	  readOnly: true,
	  theme: 'snow'
	};
	var editor = new Quill('#editor', options);
	
	
	jQuery(document).ready( function () {
		jQuery('#myTable').DataTable();
	} );
	</script>