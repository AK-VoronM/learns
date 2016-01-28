<div class="profile">
<?php foreach ($this->users as $user): ?>
<h2>
<a href="/learns/"><?php echo $user->user_login; ?></a>
</h2>
<dl>
<dt>Логин:</dt>
<dd><?php echo $user->user_login; ?></dd>
<dt>Группа юзеров:</dt>
<dd><?php echo $user->user_group; ?></dd>
<dt>Статус пользователя:</dt>
<dd><?php echo $user->user_status; ?></dd>
</dl>
    <div class="delpage">Вы можете <a class="cursor_pointer" onclick="delmypage()">удалить свою страницу</a>.</div>
<?php endforeach; ?>
</div>