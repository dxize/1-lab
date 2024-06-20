<div class="article-the-road-ahead">
    <img src='<?= $row['image_url'] ?>' alt='<?= $row['title'] ?>' class="image-featured-posts">
    <div class="article-from-top-down__rectangle-button-invisible">
        <?= $post['button'] ?>
    </div>
    <div class="article-from-top-down__title">
        <?= $row['title'] ?>
    </div>
    <div class="article-from-top-down__under-title">
        <a title='<?= $row['title'] ?>' href='/post?id=<?= $row['id'] ?>'>
            <?= htmlentities($row['subtitle']); ?>
        </a>
    </div>
    <div class="article-from-top-down__footer-rectangle">
        <img src=<?= $row['author_url']; ?> alt='<?= $row['author'] ?>' class="face-from-top-down">
        <div class="name-from-top-down">
            <?= $row['author'] ?>
        </div>
        <div class="date-from-top-down">
            <?php $requestDateTime = date("F d, Y", 1443139200);
            echo "{$requestDateTime}"; ?>
        </div>
    </div>
</div>
