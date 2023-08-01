</div>
<!-- File Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- File JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<!-- File DataTables -->
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js" ></script>
<!-- Init/Attach Datatable ke table kita -->
<script>
  $(document).ready(function(){
      // jQuery methods go here...
    $('#myTable').DataTable();

    $('.alert').alert().delay(3000).slideUp('slow');
  });
</script>





  </body>
</html>