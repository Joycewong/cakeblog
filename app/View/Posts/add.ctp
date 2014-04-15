<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array ('action'=>'add'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');

$('form#CommentAdd').submit(function(e) {
    e.preventDefault();

    $.post(
        $(this).attr('href'), 
        $(this).serialize(),
        function(result) {
            ...
            $('#myModal').modal('hide');
        }
    );
});
?>