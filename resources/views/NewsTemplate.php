<?php
if (isset($error) && $error) {
    echo "Новость не найдена!";
    return;
}
if (isset($new)):?>
    <h3><?=$new->getHeader()?></h3>
    <p><b>ID:</b> <?=$new->getId()?>
    <p><b>Дата публикации:</b> <?=$new->getPublishDate()?>
    <p><b>Анонс:</b> <?=$new->getAnounce()?>
    <p><b>Текст новости:</b> <?=$new->getText()?>
    <p><b>Теги:</b> <?=$new->getTags()?>
<?endif;?>
<?if (isset($news)):?>
    <h2>Результат поиска:</h2>
    <?foreach ($news as $new):?>
        <h3><?=$new->getHeader()?></h3>
        <p><b>ID:</b> <?=$new->getId()?>
        <p><b>Дата публикации:</b> <?=$new->getPublishDate()?>
        <p><b>Анонс:</b> <?=$new->getAnounce()?>
        <p><b>Текст новости:</b> <?=$new->getText()?>
        <p><b>Теги:</b> <?=$new->getTags()?>
    <?endforeach;?>
<?endif;?>