<nav class="navbar navbar-expand-lg justify-content-between">
        <a href="" class="navbar-brand ms-3">
            <i class="fas fa-home"></i>
        </a>
        
        <a href="profile.php" class="nav-link">
            Welcom, <?= $_SESSION['username'];?>
        </a>

        <a href="../actions/logout.php" class="nav-link me-3">
                        Logout
        </a>
        
    </nav>