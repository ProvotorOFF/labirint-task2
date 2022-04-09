<?php
if (isset($deleted)) {
    if ($deleted) {
        echo "Новость удалена";
    } else {
        echo "Возникла ошибка при удалении";
    }
}
?>
<p><a href="/create/">Создать новость</a>
<p><form action="{{route('DeleteNews')}}" method="get">
    <label for="id">Удалить новость по ID: </label>
    <input type="number" step=1 max=1000 min=0 name="id">
    <button type="submit">Удалить</button>
</form>
<p><form action="{{route('ShowNews')}}" method="get">
    <label for="id">Поиск новости по ID</label>
    <input type="number" step=1 max=1000 min=0 name="id">
    <button type="submit">Найти</button>
</p>
<p><form action="{{route('ShowNews')}}" method="get">
    <label for="q">Поиск новости по ID</label>
    <input type="text" name="q">
    <button type="submit">Найти</button>
</p>
