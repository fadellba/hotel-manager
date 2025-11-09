<?php include_once __DIR__ . '/../../header.php' ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>✏️ Modifier la Chambre #101</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    Modification de la Chambre 101
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <!-- Numéro de chambre (disabled en modification) -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Numéro de Chambre</label>
                                <input type="number" class="form-control" name="room_number" value="101"
                                    disabled readonly>
                                <small class="text-muted">Le numéro de chambre ne peut pas être modifié</small>
                            </div>

                            <!-- Type de chambre -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de Chambre *</label>
                                <select class="form-select" name="room_type" required>
                                    <option value="1" selected>Standard Simple</option>
                                    <option value="2">Standard Double</option>
                                    <option value="3">Supérieure</option>
                                    <option value="4">Suite Junior</option>
                                    <option value="5">Suite Présidentielle</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Étage -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Étage *</label>
                                <select class="form-select" name="floor" required>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <!-- Statut -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut *</label>
                                <select class="form-select" name="status" required>
                                    <option value="LIBRE" selected>Libre</option>
                                    <option value="OCCUPEE">Occupée</option>
                                    <option value="MAINTENANCE">Maintenance</option>
                                    <option value="HORS_SERVICE">Hors Service</option>
                                </select>
                            </div>
                        </div>

                        <!-- Équipements (pré-cochés selon données existantes) -->
                        <div class="mb-3">
                            <label class="form-label">Équipements</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="air_conditioning" value="1" checked>
                                        <label class="form-check-label">❄️ Climatisation</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="balcony" value="1">
                                        <label class="form-check-label">🌿 Balcon</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="ocean_view" value="1" checked>
                                        <label class="form-check-label">🌊 Vue sur mer</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date dernière rénovation -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de Dernière Rénovation</label>
                                <input type="date" class="form-control" name="last_renovation_date" value="2024-01-15">
                            </div>

                            <!-- Date création (disabled) -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de Création</label>
                                <input type="date" class="form-control" name="created_date" value="2023-05-10" disabled readonly>
                            </div>
                        </div>

                        <!-- Historique des modifications -->
                        <div class="mb-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6>📋 Historique de la Chambre</h6>
                                    <small>
                                        <strong>Créée le:</strong> 10/05/2023<br>
                                        <strong>Dernière modification:</strong> 15/01/2024<br>
                                        <strong>Dernier client:</strong> Dupont Jean (01/12/2024)
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Informations supplémentaires -->
                        <div class="mb-3">
                            <label class="form-label">Remarques Additionnelles</label>
                            <textarea class="form-control" name="notes" rows="3"
                                placeholder="Informations supplémentaires sur la chambre...">Chambre rénovée en janvier 2024. Vue partielle sur la mer.</textarea>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-secondary">🔄 Restaurer</button>
                            <div>
                                <a href="chambres.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-warning">💾 Mettre à Jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Section actions dangereuses -->
            <div class="card mt-4 border-danger">
                <div class="card-header bg-danger text-white">
                    ⚠️ Zone de Danger
                </div>
                <div class="card-body">
                    <p class="text-muted">Actions irréversibles sur la chambre</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            🗑️ Supprimer cette Chambre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?php include_once __DIR__ . '/../../footer.php' ?>