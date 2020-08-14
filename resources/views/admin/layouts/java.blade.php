
    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('nifty/get-started/js/jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('nifty/get-started/js/bootstrap.min.js')}}"></script>


    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="{{asset('nifty/get-started/js/nifty.min.js')}}"></script>

    <script src="{{asset('nifty/get-started/js/pace.min.js')}}"></script>

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('nifty/get-started/css/pace.min.css')}}" rel="stylesheet">


    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('nifty/demo/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('nifty/demo/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('nifty/demo/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <!-- <script src="{{ asset('nifty/demo/js/demo/tables-datatables.js') }}"></script> -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->

    <!--Select2 [ OPTIONAL ]-->
    <script src="{{ asset('nifty/demo/plugins/select2/js/select2.min.js') }}"></script>

    <!--Demo script [ DEMONSTRATION ]-->
    <!-- <script src="{{asset('nifty/demo/js/demo/nifty-demo.min.js')}}"></script> -->

    <!--Summernote [ OPTIONAL ]-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    <script src="{{asset('nifty/demo/plugins/summernote/summernote.min.js')}}"></script>

    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function () {
           $('#data-table').DataTable();
           $('#summernote').summernote({
            height: 300,

           });
        });
    </script>
