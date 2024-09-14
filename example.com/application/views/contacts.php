<h1><?= $data['title']; ?></h1>
<section>
    <p><?= $data['description']; ?></p>
    <?php if (key_exists('phones', $data) && $data['phones']): ?>
        <?php foreach ($data['phones'] as $phone): ?>
            <span><?=$phone?></span>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
