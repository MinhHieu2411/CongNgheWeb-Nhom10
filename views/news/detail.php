<?php if ($news): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($news['title']) ?></title>
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($news['title']) ?></h1>
        <h4><?= htmlspecialchars($news['created_at'])?></h4>
        <p><?= htmlspecialchars($news['content']) ?></p>
        <a href="index.php">Quay lại</a>
    </div>
</body>
</html>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Không tìm thấy</title>
</head>
<body>
    <div class="container">
        <h1>Bài viết không tồn tại.</h1>
        <a href="index.php">Quay lại</a>
    </div>
</body>
</html>
<?php endif; ?>
