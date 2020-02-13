<!-- This file is used to markup the public-facing widget. -->


<?php if (strlen(trim($title)) > 0) : ?>
    <h1 class = "phone123">
    <?php echo $title; ?>
    </h1>
<?php endif; ?>


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

<p class = "facebook">
<?php if (strlen(trim($facebook)) > 0) : ?>



<i class="fa fa-facebook-square">

    <a href="<?php echo $facebook; ?>"></a>
</i>


<?php endif; ?>

</p>

<p class = "twitter">
<?php if (strlen(trim($twitter)) > 0) : ?>



<i class="fa fa-twitter-square"></i>
<a href="<?php echo $twitter; ?>"></a>


<?php endif; ?>

</p>

<p class = "google">
<?php if (strlen(trim($google)) > 0) : ?>



<i class="fa fa-google-plus-square"></i>
<a href="<?php echo $google; ?>"></a>


<?php endif; ?>

</p>

