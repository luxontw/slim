<table>
    <thead>
    <tr>
        <?php foreach ($data['headers'] as $header) { ?>
        <th><?= htmlspecialchars($header ?? '') ?></th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item) { ?>
        <tr>
            <?php foreach ($data['headers'] as $header) { ?>
                <td><?= htmlspecialchars($item[$header] ?? '') ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
