<main class="col-md-10 ms-sm-auto px-md-4">
    <!-- Cartes de statistiques -->
    <div class="row mt-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Chambres Libres
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">12/50</div>
                        </div>
                        <div class="col-auto">
                            <div class="h2 text-success">🏨</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Réservations Aujourd'hui
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <div class="h2 text-warning">📅</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Clients Présents
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">24</div>
                        </div>
                        <div class="col-auto">
                            <div class="h2 text-info">👥</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Maintenance
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                        </div>
                        <div class="col-auto">
                            <div class="h2 text-danger">🔧</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section réservations du jour -->
    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">🟢 Arrivées Aujourd'hui</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Chambre 101 - Dupont Jean</h6>
                                <small class="text-muted">14:00 • 2 personnes • 3 nuits</small>
                            </div>
                            <span class="badge bg-success rounded-pill">€450</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Chambre 205 - Martin Sophie</h6>
                                <small class="text-muted">16:00 • 1 personne • 2 nuits</small>
                            </div>
                            <span class="badge bg-success rounded-pill">€280</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Suite 301 - Bernard Pierre</h6>
                                <small class="text-muted">18:00 • 2 personnes • 5 nuits</small>
                            </div>
                            <span class="badge bg-success rounded-pill">€1200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-warning text-white">
                    <h5 class="card-title mb-0">🟡 Départs Aujourd'hui</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Chambre 102 - Leroy Marie</h6>
                                <small class="text-muted">11:00 • Facture en attente</small>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">Facturer</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Chambre 208 - Petit Robert</h6>
                                <small class="text-muted">12:00 • Facture réglée</small>
                            </div>
                            <span class="badge bg-success">Payé</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Chambre 305 - Blanc Alice</h6>
                                <small class="text-muted">10:00 • Départ anticipé</small>
                            </div>
                            <button class="btn btn-sm btn-outline-warning">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section activité récente -->
    <div class="row mt-2">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">📋 Activité Récente</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Heure</th>
                                    <th>Type</th>
                                    <th>Détails</th>
                                    <th>Chambre</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10:30</td>
                                    <td><span class="badge bg-success">Arrivée</span></td>
                                    <td>Dupont Jean</td>
                                    <td>101</td>
                                    <td><span class="badge bg-success">Terminé</span></td>
                                </tr>
                                <tr>
                                    <td>09:15</td>
                                    <td><span class="badge bg-warning">Départ</span></td>
                                    <td>Martin Sophie</td>
                                    <td>205</td>
                                    <td><span class="badge bg-warning">En cours</span></td>
                                </tr>
                                <tr>
                                    <td>08:45</td>
                                    <td><span class="badge bg-info">Réservation</span></td>
                                    <td>Nouvelle réservation en ligne</td>
                                    <td>301</td>
                                    <td><span class="badge bg-info">Confirmée</span></td>
                                </tr>
                                <tr>
                                    <td>08:00</td>
                                    <td><span class="badge bg-danger">Maintenance</span></td>
                                    <td>Chambre hors service</td>
                                    <td>108</td>
                                    <td><span class="badge bg-danger">En cours</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>