<?php
if (!$inputvalue) {
    $inputvalue = getCuid();
} ?>
<input<?php echo($style); ?> name="<?php echo($inputname); ?>" type="text"
                             value="<?php echo(htmlspecialchars($inputvalue)); ?>" size="60" class="inputtext">