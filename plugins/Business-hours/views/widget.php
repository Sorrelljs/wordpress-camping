<!-- This file is used to markup the public-facing widget. -->


<P>
<?php if (strlen(trim($weekdays)) > 0) : ?>

<span class = "days-of-the-week">Monday-Friday:</span>

<?php echo $weekdays; ?>

<?php endif; ?>

</p>


<P>
<?php if (strlen(trim($saturdays)) > 0) : ?>

<span class = "days-of-the-week">Saturday:</span>

<?php echo $saturdays; ?>

<?php endif; ?>

</p>

<P>
<?php if (strlen(trim($sundays)) > 0) : ?>

<span class = "days-of-the-week">Sunday</span>

<?php echo $sundays; ?>

<?php endif; ?>

</p>