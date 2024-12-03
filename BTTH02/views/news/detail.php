<?php if ($news): ?>
    <h1><?= htmlspecialchars($news['title']) ?></h1>
    <p><?= htmlspecialchars($news['content']) ?></p>
    <img src="<?= htmlspecialchars($news['image']) ?>" alt="News Image">
<?php else: ?>
    <p>Bài viết không tồn tại.</p>
<?php endif; ?>
