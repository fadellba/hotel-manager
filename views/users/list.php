<?php
include_once __DIR__ . '/../../header.php';
require_once __DIR__ . '/../../database/costumers-db.php';
$result = getAllCostumers();
?>
<div class="container-fluid">
    <!-- En-tête de page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>👥 Gestion des Clients</h2>
        <a href="add.php" class="btn btn-primary">➕ Nouveau Client</a>
    </div>

    <div class="row">
        <?php include_once __DIR__ . '/../../sidebar.php' ?>
        <main class="col-md-10 ms-sm-auto px-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Coordonnées</th>
                                    <th>Statut</th>
                                    <th>Réservations</th>
                                    <th>Dernière visite</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#CLI-001</td>
                                    <td>
                                        <strong>Dupont Jean</strong><br>
                                        <small class="text-muted">Particulier</small>
                                    </td>
                                    <td>
                                        <small>📧 jean.dupont@email.com</small><br>
                                        <small>📞 +33 1 23 45 67 89</small>
                                    </td>
                                    <td><span class="badge bg-success">Client fidèle</span></td>
                                    <td>
                                        <strong>12 réservations</strong><br>
                                        <small>45 nuits totales</small>
                                    </td>
                                    <td>01/12/2024</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="costumer-infos.php" class="btn btn-sm btn-outline-primary">👁️</a>
                                            <a href="update.php" class="btn btn-sm btn-outline-warning">✏️</a>
                                            <button class="btn btn-sm btn-outline-danger"
                                                data-bs-toggle="modal" data-bs-target="#cancelModal">❌</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Modal annulation -->
<div class="modal fade" id="cancelModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Annulation de Réservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir annuler la réservation <strong>#RES-001</strong> ?</p>
                <div class="mb-3">
                    <label class="form-label">Raison de l'annulation:</label>
                    <select class="form-select">
                        <option>Client a annulé</option>
                        <option>Problème de disponibilité</option>
                        <option>Erreur de réservation</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="refundCheck">
                    <label class="form-check-label" for="refundCheck">
                        Rembourser l'acompte
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-danger">Confirmer l'annulation</button>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>