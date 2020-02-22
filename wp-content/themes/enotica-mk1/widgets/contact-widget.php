<div class="widget-contact">
  <div>Contacto</div>
  <ul>
    <?php $values = array('address', 'phone', 'email'); ?>

    <?php foreach ($values as $value): ?>
      <li class="<?php echo $value; ?>"><?php echo $instance[$value]; ?></li>
    <?php endforeach ?>
    
  </ul>
</div>