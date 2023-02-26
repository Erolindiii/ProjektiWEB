<header class="page-header" >
    <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Home.php"><img src="../images/bNE_Logo-noBG.png" alt="bNE" style="width: 125px; height: 100px;"></a>
        <ul class="page-header_nav-list-home">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Home.php" aria-current="page" class="page-header_nav-link-home">
                    <div id="box">HOME</div>
                    <script src="../index.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-shop">
            <li>
                <a href="https://shop.gjirafa.gg/" aria-current="page" class="page-header_nav-link-shop">
                    <div id="box1">SHOP</div>
                    <script src="../index2.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-team">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Team.php" aria-current="page" class="page-header_nav-link-team">
                    <div id="box2">TEAM</div>
                    <script src="../index3.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-ranking">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Ranking.php" aria-current="page" class="page-header_nav-link-ranking">
                    <div id="box3">RANKING</div>
                    <script src="../index4.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-games">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Games.php" aria-current="page" class="page-header_nav-link-games">
                    <div id="box4">GAMES</div>
                    <script src="../index5.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-partners">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/Partners.php" aria-current="page" class="page-header_nav-link-partners">
                    <div id="box5">PARTNERS</div>
                    <script src="../index6.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-stream">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/STREAM.php" aria-current="page" class="page-header_nav-link-stream">
                    <div id="box6">STREAM</div>
                    <script src="../index7.js"></script>
                </a>
            </li>
        </ul>
        <ul class="page-header_nav-list-aboutus">
            <li>
                <a href="http://localhost:6969/ProjektiWEB/ProjektiWEB/sites/About%20Us.php" aria-current="page" class="page-header_nav-link-aboutus">
                    <div id="box7">ABOUT&nbsp;US</div>
                    <script src="../index8.js"></script>
                </a>
            </li>
        </ul>
        <?php 
        ?>
        <ul class="page-header_nav-list-login">
            <li>
                <div class="navbar">
                    <div class="dropdown">
                        <button class="dropbtn">
                            <i class="fa-regular fa-user"></i>
                        </button>
                        <div class="dropdown-content">
                            <?php
                                if (isset($_SESSION['email'])) {
                                    echo "<a href='#'>" . $_SESSION['name'] . "</a>";
                                    echo "<a href='../controller/logout.php'>Logout</a>";
                                } else {
                                    echo "<a href='#'>You are not logged in</a>";
                                    echo "<a href='../view/register.php'>Login</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </header>