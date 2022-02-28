  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('admin') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url('admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('admin') }}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{ url('admin') }}/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('admin') }}/js/demo/chart-area-demo.js"></script>
  <script src="{{ url('admin') }}/js/demo/chart-pie-demo.js"></script>

   <!-- Page level plugins -->
   <script src="{{ url('admin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="{{ url('admin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <!-- Page level custom scripts -->
   <script src="{{ url('admin') }}/js/demo/datatables-demo.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
   <script src="{{ url('datepicker-master') }}/dist/datepicker.min.js"></script>
   @stack('time-script')
   @stack('select-genre')
