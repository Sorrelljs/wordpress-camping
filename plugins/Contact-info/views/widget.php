<!-- This file is used to markup the public-facing widget. -->



<p class = "phone123">
<?php if (strlen(trim($Phone)) > 0) : ?>

    <i class="fa fa-phone"></i>

    <a href="tel:7784567891" class = "phone-input"><?php echo $Phone; ?></a>

<?php endif; ?>

</p>


<p class = "email123">
<i class="fa fa-envelope"></i>
<?php if (strlen(trim($Email)) > 0) : ?>


        
<a href="mailto:info@inhabitent.com" class = "email-input"><?php echo $Email; ?></a>

<?php endif; ?>

</p>




<p class = "address123">
<?php if (strlen(trim($Address)) > 0) : ?>



<i class="fa fa-map-marker"></i>

<?php echo $Address; ?>

<?php endif; ?>

</p>

