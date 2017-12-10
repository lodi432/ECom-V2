
</div>
<footer class ="text-center" id="footer">&copy; All rights reserved </footer>



<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/mainx.css" />


<script>
function updateSizes() {
var sizeString = '';
for (var i=1;i<=12;i++){
  if(jQuery('#size'+i).val() != ''){
    sizeString += jQuery('#size'+i).val()+':'+jQuery('#qty'+i).val()+',';
      }
  }
  jQuery('#sizes').val(sizeString);

}

function get_child_options(selected){
  if (typeof selected === 'undefined') {
    var selected = '';
}

var parentID = jQuery('#parent').val();
jQuery.ajax({
     url: '/ecomdva/admin/parsers/child_categories.php',
     type: 'POST',
     data: {parentID : parentID, selected: selected},
     success: function(data){
        jQuery('#child').html(data);
     },
     error: function(){alert("Something went wrong with the child options.")},

});

}
jQuery('select[name="parent"]').change(function(){

  get_child_options();
}

);
</script>



      </body>
      </html>
