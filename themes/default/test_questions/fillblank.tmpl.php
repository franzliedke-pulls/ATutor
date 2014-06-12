<p><?php echo AT_print($this->row['question'], 'tests_questions.quotesNotConverted'); ?></p>

<input type="text" name="blanks[<?php echo $this->row['question_id']; ?>]" value="" id="blank_<?php echo $this->row['question_id']; ?>" />