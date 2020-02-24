<div class="widget-contact">
  <div class="widget-contact__title uppercase">Contacto</div>
  <ul>
    <?php $values = array('address', 'phone', 'email'); ?>

    <?php foreach ($values as $value): ?>
      <li class="widget-contact__item icon-<?php echo $value; ?>">
        <?php if ($value == 'email'): ?>
          <a href="mailto:<?php echo $instance[$value]; ?>"><?php echo $instance[$value]; ?></a>
        <?php else: ?>
          <?php echo $instance[$value]; ?></li>
        <?php endif; ?>
    <?php endforeach ?>
    
  </ul>
</div>