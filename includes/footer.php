
</div>
<footer class ="text-center" id="footer">&copy; All rights reserved </footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<script>

function detailsmodal(id) {
var data = {"id" : id} ;
jQuery.ajax({
url : '/ecomdva/includes/detailsmodal.php',
method : "post" ,
data : data,
success : function(data){
jQuery ('body').append(data);
jQuery ('#details-modal').modal('toggle');
},
 error: function(xhr, textStatus, errorThrown){
                   alert("fail "+errorThrown);
 }
 });

}
</script>



      </body>
      </html>
