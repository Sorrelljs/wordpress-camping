<!-- This file is used to markup the public-facing widget. -->


<P>
<?php if (strlen(trim($Email)) > 0) : ?>

<span class = "Email">Email:</span>

<?php echo $Email; ?>

<?php endif; ?>

</p>


<P>
<?php if (strlen(trim($Phone)) > 0) : ?>

<span class = "Phone">Phone:</span>

<?php echo $Phone; ?>

<?php endif; ?>

</p>

