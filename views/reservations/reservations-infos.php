<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="list.php" class="btn btn-outline-secondary me-2">← Retour aux Réservations</a>
            <h2 class="d-inline-block mb-0">👁️ Réservation #RES-001</h2>
        </div>
        <div>
            <a href="modifier-reservation.html?id=1" class="btn btn-warning me-2">✏️ Modifier</a>
            <a href="reservations.html" class="btn btn-outline-primary">📋 Liste complète</a>
        </div>
    </div>

    <div class="row">
        <!-- Colonne informations principales -->
        <div class="col-md-8">
            <!-- Carte informations générales -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Informations Générales</h5>
                    <span class="badge bg-success fs-6">Confirmée</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Référence:</th>
                                    <td><strong>#RES-001</strong></td>
                                </tr>
                                <tr>
                                    <th>Client:</th>
                                    <td>
                                        <strong>Dupont Jean</strong><br>
                                        <small>📧 jean.dupont@email.com</small><br>
                                        <small>📞 +33 1 23 45 67 89</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Type:</th>
                                    <td>Directe</td>
                                </tr>
                                <tr>
                                    <th>Date réservation:</th>
                                    <td>01/12/2024</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Statut:</th>
                                    <td><span class="badge bg-success">Confirmée</span></td>
                                </tr>
                                <tr>
                                    <th>Chambre:</th>
                                    <td>
                                        <span class="badge bg-info">101 - Standard</span><br>
                                        <small>€120/nuit</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Occupants:</th>
                                    <td>2 adultes, 0 enfants</td>
                                </tr>
                                <tr>
                                    <th>Créée par:</th>
                                    <td>Admin</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte dates et tarifs -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📅 Dates & Tarifs</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="border rounded p-3">
                                <h6>Arrivée</h6>
                                <h4 class="text-success">10/12/2024</h4>
                                <small>14:00</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded p-3">
                                <h6>Départ</h6>
                                <h4 class="text-warning">15/12/2024</h4>
                                <small>12:00</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded p-3">
                                <h6>Durée</h6>
                                <h4 class="text-primary">5 nuits</h4>
                                <small>4 jours</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded p-3">
                                <h6>Total</h6>
                                <h4 class="text-danger">€600</h4>
                                <small>Acompte: €120</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte services supplémentaires -->
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">🎯 Services Supplémentaires</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    🍳 Petit-déjeuner inclus
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    📶 Wi-Fi gratuit
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="badge bg-danger me-2">✗</span>
                                    🅿️ Parking
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-danger me-2">✗</span>
                                    ⏰ Late checkout
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <strong>Remarques spéciales:</strong>
                        <p class="text-muted">Aucune remarque particulière</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne latérale avec actions et historique -->
        <div class="col-md-4">
            <!-- Carte actions rapides -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">⚡ Actions Rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#checkinModal">
                            🏨 Check-in
                        </button>
                        <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#statusModal">
                            🔄 Changer Statut
                        </button>
                        <a href="facture.html?reservation=1" class="btn btn-info mb-2">
                            🧾 Générer Facture
                        </a>
                        <button class="btn btn-outline-success mb-2">
                            📧 Envoyer Confirmation
                        </button>
                    </div>
                </div>
            </div>

            <!-- Carte historique des statuts -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📋 Historique des Statuts</h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="badge bg-success">✓</span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <small class="text-muted">01/12/2024 10:30</small>
                                <p class="mb-0">Réservation confirmée</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="badge bg-info">●</span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <small class="text-muted">01/12/2024 10:25</small>
                                <p class="mb-0">Réservation créée</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte paiements -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">💰 Paiements</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Total: €600</strong><br>
                        <strong>Acompte: €120</strong><br>
                        <strong>Solde: €480</strong>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item px-0">
                            <div class="d-flex w-100 justify-content-between">
                                <small>01/12/2024</small>
                                <span class="badge bg-success">€120</span>
                            </div>
                            <small class="text-muted">Acompte • Carte bancaire</small>
                        </div>
                    </div>
                    <button class="btn btn-outline-success w-100 mt-2">
                        💳 Enregistrer Paiement
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal check-in -->
<div class="modal fade" id="checkinModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">🏨 Check-in Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Confirmer le check-in de <strong>Dupont Jean</strong> pour la chambre <strong>101</strong> ?</p>
                <div class="mb-3">
                    <label class="form-label">Heure d'arrivée:</label>
                    <input type="time" class="form-control" value="14:00">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="documentsCheck">
                    <label class="form-check-label" for="documentsCheck">
                        Documents vérifiés
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Confirmer Check-in</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal changement statut -->
<div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">🔄 Changer le Statut</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Réservation <strong>#RES-001</strong> - Statut actuel: <span class="badge bg-success">Confirmée</span></p>
                <div class="mb-3">
                    <label class="form-label">Nouveau statut:</label>
                    <select class="form-select">
                        <option value="CONFIRMEE" selected>🟢 Confirmée</option>
                        <option value="EN_COURS">🟡 En cours</option>
                        <option value="TERMINEE">🔵 Terminée</option>
                        <option value="ANNULEE">🔴 Annulée</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Mettre à Jour</button>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>