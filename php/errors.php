<?php  if (count($errors) > 0) : ?>
  <div class="error" style="position:relative;color:crimson;top:-22px;font-size:20px;text-align:center;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>