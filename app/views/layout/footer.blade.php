 <!-- Core Scripts - Include with every page -->
  {{ HTML::script('js/jquery-1.10.2.js')  }}  
    {{ HTML::script('js/bootstrap.min.js')  }}  
   {{ HTML::script('js/plugins/metisMenu/jquery.metisMenu.js')  }}  

    <!-- Page-Level Plugin Scripts - Dashboard -->
    {{ HTML::script('js/plugins/morris/raphael-2.1.0.min.js')  }}  
    {{ HTML::script('js/plugins/morris/morris.js')  }}  

    <!-- SB Admin Scripts - Include with every page -->
    {{ HTML::script('js/sb-admin.js')  }}  

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
   {{ HTML::script('js/demo/dashboard-demo.js')  }}  

   <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
 