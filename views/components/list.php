<?php echo $data['isOrdered'] ? "<ol>" : "<ul>";
    foreach ($data['items'] as $item) { ?>
    <li><?= htmlspecialchars($item ?? '') ?></li>
<?php }
echo $data['isOrdered'] ? "</ol>" : "</ul>";