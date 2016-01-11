<!DOCTYPE html>
<html>
    <head>
        <title>Курсы от ik-znatok.ru</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Онлайн курсы">
        <meta name="author" content="ak.alz@mail.ru">
        <link rel="icon" href="/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">  
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="wraper">
            <div class="header">
                <div class="logo"><a href="/learns/">Домой</a></div>
                <?php if($this->auth): ?>
                    <div class="auth">
                        Добро пожаловать <?php echo ucfirst($this->user_login); ?><br><a href="/learns/?ctrl=Auth&act=Logout">Выйти</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="content">
        