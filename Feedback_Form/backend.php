<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Волкова Мария 231-322</title>
</head>
<style>
    .main__link{
      display: block;
      color: black;
      font-size: 25px;
      font-family: bolder;
      margin-bottom: 20px;
    }
</style>
<body>
<main>
    <textarea name="ta" id="ta" cols="50" rows="50" class="main__textarea">
        <?php
            print_r(get_headers("https://docs.google.com/spreadsheets/d/1wo72S6p5xXMA93kFcQlJh0pAclYphX3WimbCmqRzWJI/edit#gid=649063110"));
        ?>
    </textarea>
    <a href="index.html" class="main__link">Вернуться к форме</a>
</main>
</body>
</html>