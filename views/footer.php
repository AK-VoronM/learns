        </div>

        <div class="footer">
            <?php if ($this->user_group == 1): ?>
            <ul>
                <li><a href="/learns/?ctrl=Users&act=ShowUsers">Список пользователей</a></li>
                <li><a href="/learns/?ctrl=Users&act=AddUser">Добавить пользователя</a></li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    </body>
</html>