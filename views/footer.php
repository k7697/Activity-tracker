
</section>
<footer class="footer footer-color text-center">
        <span class=" ">Created in 2020</span>
    
    </footer>

    <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"></script>
</body>
<script>
  document.getElementById('btnAddCatagory').addEventListener('click',function (){
    document.querySelector('.bg-form').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-form').style.display = 'none';
  });

  document.getElementById('btnAddActivity').addEventListener('click',function (){
    document.querySelector('.bg-form').style.display = 'flex';
  });

 

  document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-form').style.display = 'none';
  });

 


</script>

</html>

