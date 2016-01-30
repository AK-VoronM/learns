<div class="profile">
<h2>
<a href="/learns/"><?php echo $user->user_login; ?></a>
</h2>
<dl>
<dt>Логин:</dt>
<dd><?php echo $this->user_login; ?></dd>
<dt>Группа юзеров:</dt>
<dd><?php echo $this->user_group; ?></dd>
<dt>Статус пользователя:</dt>
<dd><?php echo $this->user_status; ?></dd>
</dl>
    <div class="delpage">Вы можете <a class="cursor_pointer" onclick="delmypage()">удалить свою страницу</a>.</div>
</div>