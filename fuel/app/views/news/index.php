<!--Section: Content-->
<section class="text-center">
    <h4 class="mb-5"><strong>Последние новости</strong></h4>

    <div class="row">
        <?php foreach ($news as $new):?>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?= $new->img; ?>" class="img-fluid" />
                        <a href="/news/item/view/<?= $new->id; ?>/">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title new-list-title"><?= $new->title; ?></h5>
                        <p class="card-text new-list-body">
                            <?= $new->body; ?>
                        </p>
                        <p class="card-text new-date">
                            <?= date('d.m.Y H:i', strtotime($new->date)); ?>
                        </p>
                        <a href="/news/item/view/<?= $new->id; ?>/" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--Section: Content-->

<!-- Pagination -->
<?php echo $pagination->render(); ?>
<!-- Pagination -->