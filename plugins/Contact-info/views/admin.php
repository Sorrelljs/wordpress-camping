<!-- This file is used to markup the administration form of the widget. -->


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Title'); ?>">Title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Title'); ?>" name="<?php echo $this->get_field_name('Title'); ?>" type="text" value="<?php echo $Title; ?>">
   </p>
</div>

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Email'); ?>" name="<?php echo $this->get_field_name('Email'); ?>" type="text" value="<?php echo $Email; ?>">
   </p>

</div>


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Phone'); ?>">Phone:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Phone'); ?>" name="<?php echo $this->get_field_name('Phone'); ?>" type="text" value="<?php echo $Phone; ?>">
   </p>

</div>


