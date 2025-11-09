<?php
include_once __DIR__ . '/../../header.php';
require_once __DIR__ . '/../../database/reservations-db.php';
$result = getAllReservations();
?>

<div class="container-fluid">
    <!-- En-tête de page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📅 Gestion des Réservations</h2>
        <a href="add.php" class="btn btn-primary">➕ Nouvelle Réservation</a>
    </div>


    <!-- Tableau des réservations -->
    <di class="row">
        <?php include_once __DIR__ . '/../../sidebar.php' ?>
        <main class="col-md-10 ms-sm-auto px-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable" class="display">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Chambre</th>
                                    <th>Dates</th>
                                    <th>Nuits</th>
                                    <th>Personnes</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#RES-001</td>
                                    <td>
                                        <strong>Dupont Jean</strong><br>
                                        <small class="text-muted">📧 jean.dupont@email.com</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">101</span><br>
                                        <small>Standard</small>
                                    </td>
                                    <td>
                                        <strong>10/12 - 15/12/2024</strong><br>
                                        <small class="text-success">Arrivée aujourd'hui</small>
                                    </td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>€600</td>
                                    <td><span class="badge bg-success">Confirmée</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="reservations-infos.php" class="btn btn-sm btn-outline-primary">👁️</a>
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