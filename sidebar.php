<nav class="col-md-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php $_SERVER["PHP_SELF"] ?>/index.php">
                    📊 Tableau de bord
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php __FILE__ ?>/views/rooms/list.php">
                    🏨 Chambres
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php __FILE__ ?>/views/reservations/list.php">
                    📅 Réservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php __FILE__ ?>/views/costumers/list.php">
                    👥 Clients
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php __FILE__ ?>/views/users/list.php">
                    👨‍💼 Personnel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    💰 Facturation
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    📈 Rapports
                </a>
            </li>
        </ul>

        <hr class="my-3">

        <h6 class="sidebar-heading px-3 mt-4 mb-1 text-muted text-uppercase">
            Quick Actions
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    ➕ Nouvelle Réservation
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    🔍 Vérifier Disponibilité
                </a>
            </li>
        </ul>
    </div>
</nav>