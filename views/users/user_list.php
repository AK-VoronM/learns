<div class="usersul">user_id</div>
<div class="usersul">user_login</div>
<div class="usersul">user_group</div>
<?php foreach ($this->users as $user):?>
<div class="usersul"><?php echo $user->user_id; ?></div>
<div class="usersul"><?php echo $user->user_login; ?></div>
<div class="usersul"><?php echo $user->user_group; ?></div>
<?php endforeach; ?>
