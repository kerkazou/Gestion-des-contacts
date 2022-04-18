<form id="form-search" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <span><span class="style2">Enter you email here</span>:</span>
    <input name="email" type="email" id="email" required/>
    <input type="submit" value="subscribe" class="submit" onclick="return fun()" />
</form>

<script>
      $(document).on('click','#save',function(e) {
  var data = $("#form-search").serialize();
  $.ajax({
         data: data,
         type: "post",
         url: "insertmail.php",
         success: function(data){
              alert("Data Save: " + data);
         }
});
 });
</script>