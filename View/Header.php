<?php
?>
<nav class="navbar navbar-expand-md navbar-light bg-custom">
        <div class="container">
        <Link to="/"><a id="0" onclick="activeAccueil()" class="navbar-brand" href="Dream-gym.php"><img src="../Static/Assets/Logo transparent.png" alt="Logo" width="115px"/></a></Link>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link to="/"><a id = "1" class="nav-link active" href="Dream-gym.php" aria-current="page" onclick="activeState()">Accueil</a></Link>
                    </li>
                    <li class="nav-item">
                        <a id = "2" class="nav-link" href="#" onclick="activeState()">Concept</a>
                    </li>
                    <li class="nav-item">
                    <a id = "3" class="nav-link" href="Programme.php" onclick="activeState()">Programmes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Giga+</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" id="4" href="Dream-gym.php#ancre">Inscription</a>
                            <a class="dropdown-item" id="5" href="form.php">Connexion</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search"/>
                    <button class="btn btn-outline-custom my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>