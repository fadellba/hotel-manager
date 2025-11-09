<?php include_once __DIR__ . '/../../header.php' ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>➕ Ajouter une Chambre</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Informations de la Chambre
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <!-- Numéro de chambre -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Numéro de Chambre *</label>
                                <input type="number" class="form-control" name="room_number" required
                                    placeholder="Ex: 101">
                            </div>

                            <!-- Type de chambre -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de Chambre *</label>
                                <select class="form-select" name="room_type" required>
                                    <option value="">Sélectionner un type</option>
                                    <option value="1">Standard Simple</option>
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
                                    <option value="">Sélectionner un étage</option>
                                    <option value="1">1</option>
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
                                    <option value="LIBRE">Libre</option>
                                    <option value="MAINTENANCE">Maintenance</option>
                                    <option value="HORS_SERVICE">Hors Service</option>
                                </select>
                            </div>
                        </div>

                        <!-- Équipements -->
                        <div class="mb-3">
                            <label class="form-label">Équipements</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="air_conditioning" value="1">
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
                                        <input class="form-check-input" type="checkbox" name="ocean_view" value="1">
                                        <label class="form-check-label">🌊 Vue sur mer</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date dernière rénovation -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de Dernière Rénovation</label>
                                <input type="date" class="form-control" name="last_renovation_date">
                            </div>

                            <!-- Date création -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de Création *</label>
                                <input type="date" class="form-control" name="created_date" required
                                    value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>

                        <!-- Informations supplémentaires -->
                        <div class="mb-3">
                            <label class="form-label">Remarques Additionnelles</label>
                            <textarea class="form-control" name="notes" rows="3"
                                placeholder="Informations supplémentaires sur la chambre..."></textarea>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-secondary">🔄 Réinitialiser</button>
                            <div>
                                <a href="chambres.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-success">💾 Enregistrer la Chambre</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/../../footer.php' ?>