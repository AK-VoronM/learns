<div class="profile">
<?php foreach ($this->users as $user): ?>
<h2>
<a href="/learns/"><?php echo $user->user_login; ?></a>
</h2>
<dl>
<dt>user_login:</dt>
<dd><?php echo $user->user_login; ?></dd>
<dt>user_group:</dt>
<dd><?php echo $user->user_group; ?></dd>
</dl>
<div class="delpage">Вы можете <a class="cursor_pointer" onclick="delmypage()">удалить свою страницу</a>.</div>
<?php endforeach; ?>
</div>