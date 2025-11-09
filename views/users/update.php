<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>✏️ Modifier le Client #CLI-001</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    Modification Client - Dupont Jean
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- En-tête info rapide -->
                        <div class="alert alert-info">
                            <strong>Client depuis:</strong> 10/05/2023 •
                            <strong>Statut:</strong> <span class="badge bg-success">Client fidèle</span> •
                            <strong>Dernière visite:</strong> 01/12/2024
                        </div>

                        <!-- Informations personnelles -->
                        <h5 class="mb-3">👤 Informations Personnelles</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom *</label>
                                <input type="text" class="form-control" name="first_name" value="Jean" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom *</label>
                                <input type="text" class="form-control" name="last_name" value="Dupont" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de client</label>
                                <select class="form-select" name="client_type">
                                    <option value="PARTICULIER" selected>Particulier</option>
                                    <option value="ENTREPRISE">Entreprise</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" name="birth_date" value="1985-03-15">
                            </div>
                        </div>

                        <!-- Coordonnées -->
                        <h5 class="mb-3 mt-4">📞 Coordonnées</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" value="jean.dupont@email.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone *</label>
                                <input type="tel" class="form-control" name="phone_number" value="+33 1 23 45 67 89" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="address" value="123 Avenue des Champs-Élysées">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Code postal</label>
                                <input type="text" class="form-control" name="postal_code" value="75008">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Ville</label>
                                <input type="text" class="form-control" name="city" value="Paris">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pays</label>
                                <select class="form-select" name="country">
                                    <option value="FR" selected>France</option>
                                    <option value="BE">Belgique</option>
                                    <option value="CH">Suisse</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationalité</label>
                                <input type="text" class="form-control" name="nationality" value="Française">
                            </div>
                        </div>

                        <!-- Informations fidélité -->
                        <h5 class="mb-3 mt-4">🎯 Programme de Fidélité</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Statut fidélité</label>
                                <select class="form-select" name="loyalty_status">
                                    <option value="NEW">Nouveau client</option>
                                    <option value="REGULAR" selected>Client régulier</option>
                                    <option value="LOYAL">Client fidèle</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Points fidélité</label>
                                <input type="number" class="form-control" value="1250" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Niveau</label>
                                <input type="text" class="form-control" value="Gold" readonly>
                            </div>
                        </div>

                        <!-- Historique -->
                        <div class="mb-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6>📋 Historique du Client</h6>
                                    <small>
                                        <strong>Première réservation:</strong> 10/05/2023<br>
                                        <strong>Dernière modification:</strong> 05/12/2024<br>
                                        <strong>Total réservations:</strong> 12 réservations, 45 nuits<br>
                                        <strong>Chiffre d'affaires:</strong> €5,400
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Informations complémentaires -->
                        <div class="mb-3">
                            <label class="form-label">Remarques & Préférences particulières</label>
                            <textarea class="form-control" name="notes" rows="3">Préfère les chambres avec vue sur mer. Fête son anniversaire le 15 mars.</textarea>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-secondary">🔄 Restaurer</button>
                            <div>
                                <a href="clients.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-warning">💾 Mettre à Jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Section actions -->
            <div class="card mt-4 border-danger">
                <div class="card-header bg-danger text-white">
                    ⚠️ Actions Client
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-outline-primary w-100 mb-2">
                                📧 Envoyer promotion
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-outline-info w-100 mb-2">
                                📊 Voir statistiques
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                🗑️ Supprimer client
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Suppression de Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer le client <strong>Dupont Jean</strong> ?</p>
                <p class="text-danger"><strong>Attention:</strong> Cette action supprimera également l'historique des réservations associées.</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="confirmDelete">
                    <label class="form-check-label" for="confirmDelete">
                        Je confirme vouloir supprimer ce client définitivement
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-danger" disabled id="deleteButton">
                    Confirmer la suppression
                </button>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>