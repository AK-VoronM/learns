<ul>
    <li>user_id user_login user_group</li>
<?php foreach ($this->users as $user):?>
    <li><?php echo $user->user_id, ' ', $user->user_login, ' ', $user->user_group; ?></li>
<?php endforeach; ?>
</ul>
