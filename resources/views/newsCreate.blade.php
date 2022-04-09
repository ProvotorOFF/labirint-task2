<?php
if (isset($isError)) {
    if ($isError) {
        echo "При создании новости произошла ошибка!";
    } else {
        echo "Новость успешно создана!";
    }
}
echo $isError;
?>
<form action="{{route('CreateNews')}}" method="post">
@csrf
    <label for="header">Заголовок</label>
    <input type="text" name="header"><p>
    <label for="anounce">Анонс</label>
    <textarea rows="5" cols="30" name="anounce"></textarea><p>
    <label for="text">Текст</label>
    <textarea rows="20" cols="60" name="text"></textarea><p>
    <label for="tags">Теги</label>
    <input type="text" name="tags"><p>
        <button type="submit">Создать новость</button>
</form>
<p><a href="/">К списку новостей</a>