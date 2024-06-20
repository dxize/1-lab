<div class="articles-in-most-recent">
    <img src='<?= $row['image_url'] ?>' class="articles-in-most-recent-picture">
    <div class="articles-in-most-recent__title">
        <?= $row['title'] ?>
    </div>
    <div class="articles-in-most-recent__under-title-Still-Standing-Tall">
        <a title='<?= $row['title'] ?>' href='/post?id=<?= $row['id'] ?>'>
            <?= $row['subtitle']; ?>
        </a>
    </div>
    <div class="underlining-articles-in-most-recent"></div>
    <div class="articles-in-most-recent__footer-rectangle">
        <img src="<?= $row['author_url'] ?>" alt="<?= $row['author'] ?>" class="articles-in-most-recent__face">
        <div class="articles-in-most-recent__name">
            <?= $row['author'] ?>
        </div>
        <div class="articles-in-most-recent__date">
            <?php $requestDateTime = date("n/j/Y", 1443139200);
            echo "{$requestDateTime}"; ?>
        </div>
    </div>
</div>