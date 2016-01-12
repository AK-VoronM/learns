<ul>
<div class="usersul">user_id</div>
<div class="usersul">user_login</div>
<div class="usersul">user_group</div>
<?php foreach ($this->users as $user):?>
    <li><?php echo $user->user_id, ' ', $user->user_login, ' ', $user->user_group; ?></li>
<?php endforeach; ?>
</ul>
