<?php include_once __DIR__ . '/../../header.php'?>
<div class="container-fluid">
    <!-- En-tête avec bouton retour -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="list.php" class="btn btn-outline-secondary me-2">← Retour aux Chambres</a>
            <h2 class="d-inline-block mb-0">👁️ Détail de la Chambre #101</h2>
        </div>
        <div>
            <a href="modifier-chambre.html?id=101" class="btn btn-warning me-2">✏️ Modifier</a>
            <a href="chambres.html" class="btn btn-outline-primary">📋 Liste complète</a>
        </div>
    </div>

    <div class="row">
        <!-- Colonne informations principales -->
        <div class="col-md-8">
            <!-- Carte informations générales -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Informations Générales</h5>
                    <span class="badge bg-success fs-6">Libre</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Numéro:</th>
                                    <td><strong>101</strong></td>
                                </tr>
                                <tr>
                                    <th>Type:</th>
                                    <td>
                                        <span class="badge bg-info">Standard Simple</span>
                                        <br><small class="text-muted">€120/nuit</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Étage:</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Capacité:</th>
                                    <td>🛏️ 2 personnes</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Statut:</th>
                                    <td><span class="badge bg-success">Libre</span></td>
                                </tr>
                                <tr>
                                    <th>Créée le:</th>
                                    <td>10/05/2023</td>
                                </tr>
                                <tr>
                                    <th>Dernière rénovation:</th>
                                    <td>15/01/2024</td>
                                </tr>
                                <tr>
                                    <th>Prochaine maintenance:</th>
                                    <td><span class="text-success">Aucune planifiée</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte équipements -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">🎯 Équipements & Services</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    ❄️ Climatisation
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    🌊 Vue sur mer
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    📺 Télévision LCD
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="badge bg-danger me-2">✗</span>
                                    🌿 Balcon
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    📶 Wi-Fi gratuit
                                </li>
                                <li class="mb-2">
                                    <span class="badge bg-success me-2">✓</span>
                                    ☕ Machine à café
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte historique des réservations -->
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">📅 Historique des Réservations</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Client</th>
                                    <th>Durée</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/12/2024 - 05/12/2024</td>
                                    <td>Dupont Jean</td>
                                    <td>4 nuits</td>
                                    <td>€480</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                                <tr>
                                    <td>15/11/2024 - 18/11/2024</td>
                                    <td>Martin Sophie</td>
                                    <td>3 nuits</td>
                                    <td>€360</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                                <tr>
                                    <td>10/10/2024 - 12/10/2024</td>
                                    <td>Bernard Pierre</td>
                                    <td>2 nuits</td>
                                    <td>€240</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <small class="text-muted">Affichage des 3 dernières réservations</small>
                        <br>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir tout l'historique</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne latérale avec actions et statistiques -->
        <div class="col-md-4">
            <!-- Carte actions rapides -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">⚡ Actions Rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="nouvelle-reservation.html?chambre=101" class="btn btn-primary mb-2">
                            📅 Nouvelle Réservation
                        </a>
                        <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#statusModal">
                            🔄 Changer Statut
                        </button>
                        <button class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#maintenanceModal">
                            🔧 Planifier Maintenance
                        </button>
                        <a href="facture.html?chambre=101" class="btn btn-outline-success mb-2">
                            💰 Générer Facture
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carte statistiques -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📊 Statistiques</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h4 class="text-primary mb-0">12</h4>
                                    <small>Réservations totales</small>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h4 class="text-success mb-0">78%</h4>
                                    <small>Taux d'occupation</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h4 class="text-warning mb-0">45</h4>
                                    <small>Nuits vendues</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h4 class="text-danger mb-0">€5,400</h4>
                                    <small>Revenu total</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte prochaines réservations -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">📅 Prochaines Réservations</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item px-0">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">20/12/2024 - 25/12/2024</h6>
                                <span class="badge bg-success">Confirmée</span>
                            </div>
                            <p class="mb-1">Dubois Marie</p>
                            <small class="text-muted">5 nuits • €600</small>
                        </div>
                        <div class="list-group-item px-0">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">02/01/2025 - 06/01/2025</h6>
                                <span class="badge bg-warning">En attente</span>
                            </div>
                            <p class="mb-1">Petit Lucas</p>
                            <small class="text-muted">4 nuits • €480</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal changement de statut -->
<div class="modal fade" id="statusModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">🔄 Changer le Statut</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Chambre <strong>#101</strong> - Statut actuel: <span class="badge bg-success">Libre</span></p>

                <div class="mb-3">
                    <label class="form-label">Nouveau statut:</label>
                    <select class="form-select">
                        <option value="LIBRE" selected>🟢 Libre</option>
                        <option value="OCCUPEE">🟡 Occupée</option>
                        <option value="MAINTENANCE">🟠 Maintenance</option>
                        <option value="HORS_SERVICE">🔴 Hors Service</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Raison du changement (optionnel):</label>
                    <textarea class="form-control" rows="3" placeholder="Ex: Nettoyage en cours, Réparation..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">💾 Mettre à Jour</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal planification maintenance -->
<div class="modal fade" id="maintenanceModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">🔧 Planifier une Maintenance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Type de maintenance:</label>
                    <select class="form-select">
                        <option>Nettoyage approfondi</option>
                        <option>Réparation équipement</option>
                        <option>Rénovation</option>
                        <option>Inspection technique</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de début:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de fin:</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <textarea class="form-control" rows="3" placeholder="Détails de la maintenance..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info">📅 Planifier</button>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>