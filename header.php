    <?php session_start() ?>
        <div class="container">
            <?php 
            if(isset($_SESSION['auth'])){
                ?>
                <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/temp1.png" width="300px" height="100px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="adminportal.php">Account</a></li>
                        <li><a href="admin1.php">Admin</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <?php
            }
            else{
                ?>
                <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/temp1.png" width="300px" height="100px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="adminportal.php">Explore</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <?php
            }
            ?>
        </div>

