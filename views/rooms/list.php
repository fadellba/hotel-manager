<?php
include_once __DIR__ . '/../../header.php';
require_once __DIR__ . '/../../database/rooms-db.php';
$result = getAllRooms();
?>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>🏨 Gestion des Chambres</h2>
        <a href="add.php" class="btn btn-primary">➕ Ajouter une Chambre</a>
    </div>


    <div class="row">
        <?php include_once __DIR__ . '/../../sidebar.php' ?>
        <main class="col-md-10 ms-sm-auto px-md-4">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Statut</th>
                        <th>Etage</th>
                        <th>Climatisation</th>
                        <th>Balcon</th>
                        <th>Vue ocean</th>
                        <th>Dernier renovation</th>
                        <th>Date d'ajout</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($room = $result->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?= $room["id"] ?></td>
                            <td><?= $room["name"] ?></td>
                            <td><?= $room["status"] ?></td>
                            <td><?= $room["floor"] ?></td>
                            <td><?= $room["air_conditioning"]
                                    === 1 ? "OUI" : "NON" ?></td>
                            <td><?= $room["balcony"]
                                    === 1 ? "OUI" : "NON" ?></td>
                            <td><?= $room["ocean_view"] === 1 ? "OUI" : "NON" ?></td>
                            <td><?= $room["last_date_renovation"] ?></td>
                            <td><?= $room["created_date"] ?></td>
                            <td>
                                <a href="room-infos.php" class="btn btn-sm btn-outline-primary">👁️</a>
                                <a href="update.php" class="btn btn-sm btn-outline-warning">✏️</a>
                                <a href="#" class="btn btn-sm btn-outline-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal">❌</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <!-- Modal de confirmation suppression -->
            <div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title">Confirmation de Suppression</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>⚠️ <strong>Attention:</strong> Vous êtes sur le point de supprimer la chambre <strong>#101</strong>.</p>
                            <p>Cette action est <strong>irréversible</strong>. Toutes les données associées à cette chambre seront perdues.</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmDelete">
                                <label class="form-check-label" for="confirmDelete">
                                    Je confirme vouloir supprimer cette chambre
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-danger" disabled id="deleteButton">
                                🗑️ Supprimer Définitivement
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include_once __DIR__ . '/../../footer.php' ?>