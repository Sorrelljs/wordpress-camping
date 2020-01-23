<!-- This file is used to markup the administration form of the widget. -->


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
</div>

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Weekdays'); ?>">Mon - Fri:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Weekdays'); ?>" name="<?php echo $this->get_field_name('Weekdays'); ?>" type="text" value="<?php echo $Weekdays; ?>">
   </p>

</div>


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Saturdays'); ?>">Saturday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Saturdays'); ?>" name="<?php echo $this->get_field_name('Saturdays'); ?>" type="text" value="<?php echo $Saturdays; ?>">
   </p>

</div>


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Sundays'); ?>">Sunday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Sundays'); ?>" name="<?php echo $this->get_field_name('Sundays'); ?>" type="text" value="<?php echo $Sundays; ?>">
   </p>

</div>