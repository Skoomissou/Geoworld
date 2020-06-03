
<script src="assets/library/jquery-3.4.1.js"> </script>
<script src="assets/bootstrap-4.4.1-dist/js/bootstrap.js"> </script>
 
<!--Javscript pour la test_users.php-->
<script> src="https://code.jquery.com/jquery-3.3.1.js"</script>
<script> src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"</script>
<script> src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"</script>
<script> scr="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"</script>
<script> scr="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"</script>
<!-- JS pour la page test_users.php-->
<script>
    $(document).ready(function() {
        $('#usertable').DataTable();
    } );
</script>

<!--JS pour la page country -->
<script>
    $('#dt-material-checkbox').dataTable({

        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        }
    });
</script>

<script>
    // initialize scrollspy
    $('body').scrollspy({
        target: '.dotted-scrollspy'
    });
</script> 

<!--pour la page infopays-->
<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"> </script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"> </script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"> </script>

<script >
    $(document).ready(function() {
        $('#infopays').DataTable();
    } );
</script>
