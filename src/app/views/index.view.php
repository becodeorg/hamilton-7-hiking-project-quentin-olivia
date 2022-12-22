<div class="section-hikes">
    <ul>
        <?php foreach ($hikes as $hike) : ?>
            <li>
                <a href="/hike?code=<?= $hike['id']; ?>">
                    <span><?= $hike['name'] ?></span>
                </a>
                <span><?= $hike['date'] ?></span>
                <span><?= $hike['duration'] ?></span>
                <span><?= $hike['elevation_gain'] ?></span>
                <p><?= $hike['description'] ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>