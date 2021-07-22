<!DOCTYPE html>
<html lang="<?= htmlspecialchars($data['lang'] ?? 'zh-TW') ?>">
<head>
    <title><?= htmlspecialchars($data['title'] ?? 'App') ?></title>
    <?= $data['header'] ?? '' ?>
</head>
<body>
    <?php foreach ($data['body'] as $element) { ?>
        <?= $element ?? '' ?>
    <?php } ?>   
</body>
</html>