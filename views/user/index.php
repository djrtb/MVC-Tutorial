<div class="row">
    <div class="small-6 large-5 columns">
        <h3>Users</h3>
        <form method="post" action="<?php echo URL;?>user/create">
        <label>Login</label><input type="text" name="login" /><br />
        <label>Password</label><input type="text" name="password" /><br />
        <label>Role</label>
            <select name="role">
                <option value="default">Default</option>
                <option value="admin">Admin</option>
            </select><br />
        <label>&nbsp;</label><input class="success hollow button float-right" type="submit" />
    </form>
    </div>
</div>

<center>
    <table class="stack">
    <?php
        foreach($this->userList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['userid'] . '</td>';
            echo '<td>' . $value['login'] . '</td>';
            echo '<td>' . $value['role'] . '</td>';
            echo '<td>
                    <a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a> 
                    <a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
            echo '</tr>';
        }
    ?>
    </table>    
</center>
