<?php echo $header; ?>
<div class="container">
  <div class="row">
    <div id="content" class="<?php echo $class; ?>">
      <h1><?php echo $heading_title; ?></h1>
      <?php echo $text_message; ?>
      <div class="buttons">
        <a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a>
      </div>
     </div>
    </div>
</div>
<?php echo $footer; ?>