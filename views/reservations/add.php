<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>➕ Nouvelle Réservation</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Informations de la Réservation
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- Section Client -->
                        <h5 class="mb-3">👥 Informations Client</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Client existant</label>
                                <select class="form-select" name="client_id">
                                    <option value="">Sélectionner un client</option>
                                    <option value="1">Dupont Jean (jean.dupont@email.com)</option>
                                    <option value="2">Martin Sophie (sophie.martin@email.com)</option>
                                </select>
                                <small class="text-muted">Ou <a href="#">créer un nouveau client</a></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de réservation</label>
                                <select class="form-select" name="reservation_type" required>
                                    <option value="DIRECTE">Directe</option>
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
                                <input type="date" class="form-control" name="arrival_date" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Date de départ *</label>
                                <input type="date" class="form-control" name="departure_date" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Nombre de nuits</label>
                                <input type="number" class="form-control" name="night_count" value="1" readonly>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Adultes *</label>
                                <select class="form-select" name="adult_count" required>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Enfants</label>
                                <select class="form-select" name="child_count">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Section Chambre -->
                        <h5 class="mb-3 mt-4">🏨 Sélection de la Chambre</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de chambre</label>
                                <select class="form-select" name="room_type" id="roomType">
                                    <option value="">Tous les types</option>
                                    <option value="1">Standard Simple</option>
                                    <option value="2">Standard Double</option>
                                    <option value="3">Supérieure</option>
                                    <option value="4">Suite</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Chambre disponible</label>
                                <select class="form-select" name="room_id" required>
                                    <option value="">Sélectionner une chambre</option>
                                    <option value="101">101 - Standard (€120/nuit)</option>
                                    <option value="102">102 - Standard (€120/nuit)</option>
                                    <option value="201">201 - Supérieure (€140/nuit)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Section Tarification -->
                        <h5 class="mb-3 mt-4">💰 Tarification</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Prix par nuit</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="night_price" value="120" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Total séjour</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="total_amount" value="600" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Acompte payé</label>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" class="form-control" name="deposit_paid" value="120" step="0.01">
                                </div>
                            </div>
                        </div>

                        <!-- Section Options supplémentaires -->
                        <h5 class="mb-3 mt-4">🎯 Options Supplémentaires</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="breakfast_included">
                                    <label class="form-check-label">🍳 Petit-déjeuner inclus</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="parking_included">
                                    <label class="form-check-label">🅿️ Parking inclus</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="late_checkout">
                                    <label class="form-check-label">⏰ Late checkout</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Remarques spéciales</label>
                                    <textarea class="form-control" name="special_notes" rows="2" placeholder="Allergies, anniversaire..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="reset" class="btn btn-secondary">🔄 Réinitialiser</button>
                            <div>
                                <a href="reservations.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-success">💾 Créer la Réservation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>