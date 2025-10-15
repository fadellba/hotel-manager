<?php
require_once __DIR__ . '/../actions/search-room-action.php';
?>

<main>

    <?php if (!empty($error)): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">

        <fieldset>

            <label for="party">Veuillez choisir une date et une heure :</label>
            <input id="party" type="datetime-local" name="partydate" />

            <label for="attendees-count">Nombre de participants</label>
            <input type="number" id="attendees-count" name="attendeescount">

            <input type="checkbox" id="has-projector" name="hasprojector">
            <label for="has-projector" >Avec projecteur</label>

            <input type="checkbox" id="has-whiteboard" name="haswhiteboard">
            <label for="has-whiteboard" >Avec tableau blanc</label>

            <button type="submit" name="send">Rechercher</button>

        </fieldset>

    </form>

    <?php if (!empty($rooms)): ?>
        <h2>Résultats :</h2>
        <?php foreach ($rooms as $room): ?>
            <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
                <p><strong><?= htmlspecialchars($room['name']) ?></strong></p>
                <p>Capacité : <?= htmlspecialchars($room['capacity']) ?></p>
                <p>Projecteur : <?= $room['has_projector'] ? 'Oui' : 'Non' ?></p>
                <p>Tableau blanc : <?= $room['has_whiteboard'] ? 'Oui' : 'Non' ?></p>
            </div>
        <?php endforeach; ?>
    <?php elseif (isset($_POST["send"])): ?>
        <p>Aucune salle trouvée.</p>
    <?php endif; ?>

</main>
