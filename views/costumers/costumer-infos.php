<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="list.php" class="btn btn-outline-secondary me-2">← Retour aux Clients</a>
            <h2 class="d-inline-block mb-0">👁️ Client #CLI-001</h2>
        </div>
        <div>
            <a href="modifier-client.html?id=1" class="btn btn-warning me-2">✏️ Modifier</a>
            <a href="clients.html" class="btn btn-outline-primary">📋 Liste complète</a>
        </div>
    </div>

    <div class="row">
        <!-- Colonne informations principales -->
        <div class="col-md-8">
            <!-- Carte informations générales -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Informations Générales</h5>
                    <span class="badge bg-success fs-6">Client fidèle</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Référence:</th>
                                    <td><strong>#CLI-001</strong></td>
                                </tr>
                                <tr>
                                    <th>Nom complet:</th>
                                    <td><strong>Dupont Jean</strong></td>
                                </tr>
                                <tr>
                                    <th>Type:</th>
                                    <td>Particulier</td>
                                </tr>
                                <tr>
                                    <th>Date de naissance:</th>
                                    <td>15/03/1985 (39 ans)</td>
                                </tr>
                                <tr>
                                    <th>Nationalité:</th>
                                    <td>Française</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%">Statut:</th>
                                    <td><span class="badge bg-success">Client fidèle</span></td>
                                </tr>
                                <tr>
                                    <th>Client depuis:</th>
                                    <td>10/05/2023</td>
                                </tr>
                                <tr>
                                    <th>Dernière visite:</th>
                                    <td>01/12/2024</td>
                                </tr>
                                <tr>
                                    <th>Niveau fidélité:</th>
                                    <td><span class="badge bg-warning">Gold</span></td>
                                </tr>
                                <tr>
                                    <th>Points fidélité:</th>
                                    <td>1,250 points</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte coordonnées -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📞 Coordonnées</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>📧 Email:</strong><br>
                                jean.dupont@email.com
                            </p>
                            <p>
                                <strong>📞 Téléphone:</strong><br>
                                +33 1 23 45 67 89
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>🏠 Adresse:</strong><br>
                                123 Avenue des Champs-Élysées<br>
                                75008 Paris<br>
                                France
                            </p>
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
                                    <th>Réservation</th>
                                    <th>Chambre</th>
                                    <th>Dates</th>
                                    <th>Nuits</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#RES-045</td>
                                    <td>101 - Standard</td>
                                    <td>01/12 - 05/12/2024</td>
                                    <td>4</td>
                                    <td>€480</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                                <tr>
                                    <td>#RES-038</td>
                                    <td>205 - Supérieure</td>
                                    <td>15/11 - 18/11/2024</td>
                                    <td>3</td>
                                    <td>€420</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                                <tr>
                                    <td>#RES-025</td>
                                    <td>301 - Suite</td>
                                    <td>10/10 - 12/10/2024</td>
                                    <td>2</td>
                                    <td>€600</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <small class="text-muted">Affichage des 3 dernières réservations sur 12 au total</small>
                        <br>
                        <a href="#" class="btn btn-sm btn-outline-primary">Voir tout l'historique</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne latérale avec statistiques et actions -->
        <div class="col-md-4">
            <!-- Carte actions rapides -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">⚡ Actions Rapides</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="nouvelle-reservation.html?client=1" class="btn btn-primary mb-2">
                            📅 Nouvelle Réservation
                        </a>
                        <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#loyaltyModal">
                            🎯 Modifier Fidélité
                        </button>
                        <button class="btn btn-info mb-2">
                            📧 Envoyer Message
                        </button>
                        <a href="#" class="btn btn-outline-success mb-2">
                            🧾 Historique Complet
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carte statistiques -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📊 Statistiques Client</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h4 class="text-primary mb-0">12</h4>
                                    <small>Réservations</small>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h4 class="text-success mb-0">45</h4>
                                    <small>Nuits totales</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h4 class="text-warning mb-0">78%</h4>
                                    <small>Taux de retour</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h4 class="text-danger mb-0">€5,400</h4>
                                    <small>CA total</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte préférences -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">🎯 Préférences</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Préférences de chambre:</strong>
                        <ul class="list-unstyled mt-2">
                            <li><span class="badge bg-success me-1">✓</span> Vue sur mer</li>
                            <li><span class="badge bg-success me-1">✓</span> Étage élevé</li>
                            <li><span class="badge bg-danger me-1">✗</span> Chambre fumeur</li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <strong>Remarques:</strong>
                        <p class="text-muted mt-2">Fête son anniversaire le 15 mars. Préfère les chambres calmes.</p>
                    </div>
                    <div>
                        <strong>Communication:</strong>
                        <ul class="list-unstyled mt-2">
                            <li><span class="badge bg-success me-1">✓</span> Accepte newsletter</li>
                            <li><span class="badge bg-success me-1">✓</span> Accepte offres spéciales</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal fidélité -->
<div class="modal fade" id="loyaltyModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">🎯 Programme de Fidélité</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Client: <strong>Dupont Jean</strong></p>
                <div class="mb-3">
                    <label class="form-label">Statut fidélité:</label>
                    <select class="form-select">
                        <option value="NEW">Nouveau client</option>
                        <option value="REGULAR">Client régulier</option>
                        <option value="LOYAL" selected>Client fidèle</option>
                        <option value="VIP">VIP</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Points fidélité:</label>
                    <input type="number" class="form-control" value="1250">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ajouter/Retirer des points:</label>
                    <div class="input-group">
                        <span class="input-group-text">+/-</span>
                        <input type="number" class="form-control" placeholder="Nombre de points">
                        <span class="input-group-text">pts</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Raison du changement:</label>
                    <textarea class="form-control" rows="2" placeholder="Ex: Réservation bonus, Promotion..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">💾 Mettre à Jour</button>
            </div>
        </div>
    </div>
</div>  
<?php include_once __DIR__ . '/../../footer.php' ?>