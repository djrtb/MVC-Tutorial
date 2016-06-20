<h2>Note</h2>

<div class="row">
  <div class="large-4 columns">
    <form method="post" action="<?php echo URL;?>note/create">
        <label>Title</label><input type="text" name="title" /><br />
        <label>Content</label><textarea name="content"></textarea><br />
        <label>&nbsp;</label><input class="success hollow button" type="submit" />
    </form>
  </div>
  <div class="large-8 columns">
        <table class="stack">
        <?php
        foreach($this->noteList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['title'] . '</td>';
            echo '<td>' . $value['date_added'] . '</td>';
            echo '<td><a href="'. URL . 'note/edit/' . $value['noteid'].'">Edit</a></td>';
            echo '<td><a class="delete" href="'. URL . 'note/delete/' . $value['noteid'].'">Delete</a></td>';
            echo '</tr>';
        }
        ?>
        </table>
  </div>
</div>


<hr />

<script>
$(function() {
    
    $('.delete').click(function(e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;
        
    });
    
});
</script>