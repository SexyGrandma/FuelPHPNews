<button class="btn btn-primary" onclick="history.back();">Назад</button>
<h5 class="mt-5"><?= $new->title; ?></h5>
<p class="new-date">
    <?= date('d.m.Y H:i', strtotime($new->date)); ?>
</p>
<img src="<?= $new->img; ?>" />
<p class="mt-3">
    <?= $new->body; ?>
</p>
<p class="text-right">
    Источник: <a target="_blank" href="<?= $new->link; ?>">газета.ру</a>
</p>
