<?php include_once __DIR__ . '/../../header.php' ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>➕ Nouveau Client</h2>
        <a href="list.php" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Informations du Client
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <!-- Informations personnelles -->
                        <h5 class="mb-3">👤 Informations Personnelles</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom *</label>
                                <input type="text" class="form-control" name="first_name" required
                                    placeholder="Prénom">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom *</label>
                                <input type="text" class="form-control" name="last_name" required
                                    placeholder="Nom">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de client</label>
                                <select class="form-select" name="client_type">
                                    <option value="PARTICULIER">Particulier</option>
                                    <option value="ENTREPRISE">Entreprise</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" name="birth_date">
                            </div>
                        </div>

                        <!-- Coordonnées -->
                        <h5 class="mb-3 mt-4">📞 Coordonnées</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" required
                                    placeholder="email@exemple.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone *</label>
                                <input type="tel" class="form-control" name="phone_number" required
                                    placeholder="+33 1 23 45 67 89">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="address"
                                    placeholder="Numéro et rue">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Code postal</label>
                                <input type="text" class="form-control" name="postal_code"
                                    placeholder="75000">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Ville</label>
                                <input type="text" class="form-control" name="city"
                                    placeholder="Paris">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pays</label>
                                <select class="form-select" name="country">
                                    <option value="FR">France</option>
                                    <option value="BE">Belgique</option>
                                    <option value="CH">Suisse</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="OTHER">Autre</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationalité</label>
                                <input type="text" class="form-control" name="nationality"
                                    placeholder="Française">
                            </div>
                        </div>

                        <!-- Informations complémentaires -->
                        <h5 class="mb-3 mt-4">📋 Informations Complémentaires</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type de pièce d'identité</label>
                                <select class="form-select" name="id_type">
                                    <option value="">Sélectionner</option>
                                    <option value="PASSPORT">Passeport</option>
                                    <option value="ID_CARD">Carte d'identité</option>
                                    <option value="DRIVING_LICENSE">Permis de conduire</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Numéro de pièce</label>
                                <input type="text" class="form-control" name="id_number"
                                    placeholder="Numéro de la pièce">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Préférences</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="smoking" value="1">
                                        <label class="form-check-label">Fumeur</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="newsletter" value="1" checked>
                                        <label class="form-check-label">Recevoir newsletter</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="special_offers" value="1" checked>
                                        <label class="form-check-label">Offres spéciales</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Remarques & Préférences particulières</label>
                            <textarea class="form-control" name="notes" rows="3"
                                placeholder="Allergies, préférences de chambre, anniversaire..."></textarea>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="reset" class="btn btn-secondary">🔄 Réinitialiser</button>
                            <div>
                                <a href="clients.html" class="btn btn-outline-danger me-2">❌ Annuler</a>
                                <button type="submit" class="btn btn-success">💾 Créer le Client</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once __DIR__ . '/../../footer.php' ?>