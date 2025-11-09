<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>✏️ Modifier la Réservation #RES-001</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    Modification Réservation #RES-001
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- En-tête info rapide -->
                        <div class="alert alert-info">
                            <strong>Client:</strong> Dupont Jean •
                            <strong>Chambre:</strong> 101 •
                            <strong>Statut:</strong> <span class="badge bg-success">Confirmée</span>
                        </div>

                        <!-- Section Client -->
                        <h5 class="mb-3">👥 Informations Client</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Client</label>
                                <select class="form-select" name="client_id">
                                    <option value="1" selected>Dupont Jean (jean.dupont@email.com)</option>
                                    <option value="2">Martin Sophie (sophie.martin@email.com)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de réservation</label>
                                <select class="form-select" name="reservation_type" required>
                                    <option value="DIRECTE" selected>Directe</option>
                                    <option value="EN_LIGNE">En ligne</option>
                                    <option value="AGENCE">Agence</option>
                                </select>
                            </div>
                        </div>

                        <!-- Section Dates -->
                        <h5 class="mb-3 mt-4">📅 Dates de Séjour</h5>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Date d'arrivée *</label>
                                <input type="date" class="form-control" name="arrival_date" value="2024-12-10" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Date de départ *</label>
                                <input type="date" class="form-control" name="departure_date" value="2024-12-15" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Nuits</label>
                                <input type="number" class="form-control" name="night_count" value="5" readonly>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Adultes *</label>
                                <select class="form-select" name="adult_count" required>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Enfants</label>
                                <select class="form-select" name="child_count">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Section Chambre -->
                        <h5 class="mb-3 mt-4">🏨 Chambre Assignée</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Chambre</label>
                                <select class="form-select" name="room_id" required>
                                    <option value="101" selected>101 - Standard (€120/nuit)</option>
                                    <option value="102">102 - Standard (€120/nuit)</option>
                                    <option value="201">201 - Supérieure (€140/nuit)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut réservation</label>
                                <select class="form-select" name="status" required>
                                    <option value="CONFIRMEE" selected>Confirmée</option>
                                    <option value="EN_COURS">En cours</option>
                                    <option value="TERMINEE">Terminée</option>
                                    <option value="ANNULEE">Annulée</option>
                                </select>
                            </div>
                        </div>

                        <!-- Section Tarification -->
                        <h5 class="mb-3 mt-4">💰 Tarification</h5>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Prix/nuit</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="night_price" value="120" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Total séjour</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="total_amount" value="600" readonly>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Acompte payé</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="deposit_paid" value="120" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Solde à payer</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" value="480" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Historique -->
                        <div class="mb-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6>📋 Historique de la Réservation</h6>
                                    <small>
                                        <strong>Créée le:</strong> 01/12/2024<br>
                                        <strong>Dernière modification:</strong> 05/12/2024<br>
                                        <strong>Modifié par:</strong> Admin
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-secondary">🔄 Restaurer</button>
                            <div>
                                <a href="reservations.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-warning">💾 Mettre à Jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Section actions -->
            <div class="card mt-4 border-danger">
                <div class="card-header bg-danger text-white">
                    ⚠️ Actions de Réservation
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-outline-success w-100 mb-2">
                                📧 Envoyer confirmation
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-outline-info w-100 mb-2">
                                🧾 Générer facture
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#cancelModal">
                                ❌ Annuler réservation
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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