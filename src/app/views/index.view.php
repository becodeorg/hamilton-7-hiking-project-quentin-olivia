<ul>
    <?php foreach ($hikes as $hike) : ?>
        <li>
            <a href="/hike?code=<?= $hike['hikeCode']; ?>">
                <span><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>