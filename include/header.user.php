<!-- Please place all proper classes THX -->
<header class = "sticky-top Landing-Page">
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
        <div class= "container-fluid">
            <a class="navbar-brand" href = "Index.php"><img src = "../Images/Header/logo.png" alt = ""></a>
            <!-- Burger Button ID = navbarItems -->
            <button class ="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarItems" 
            aria-controls="navbarItems" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class =navbar-toggler-icon> </span>
            </button>
            <!-- End of Burger Button -->
            <!-- have to fix responsivenss-->
            <div class = "collapse navbar-collapse" id = "navbarItems">
                <ul class="navbar-nav mb-2 mb-lg-o ms-auto me-0"  > <!-- Navbar Item List Start -->
                    <li class ="nav-item">
                        <a class="nav-link" href="Index.php">Home<a>
                    </li>
                    <li class="nav-item dropdown" type="button" data-bs-toggle="collapse" data-bs-target="#FormatListItems" 
                        aria-controls ="" aria-expanded="false" aria-label="toggle navigation">
                        <a class="nav-link" href="">Format</a>
                        <!-- Navbar Item Name ^^^ -->
                        <!-- Button for Format/ Format ID = FormatListItems -->
                        <!-- Nested List for Format -->
                        <ul class= "collapse dropdown-menu" id ="FormatListItems">
                            <li>
                                <a class ="dropdown-item" href="">
                                    C++ 
                                </a>
                            </li>
                            <li><a class ="dropdown-item">
                                    Java
                                </a>
                            </li>
                            <li>
                                <a class ="dropdown-item">
                                    Phyton
                                </a>
                            </li>
                            <li>
                                <a class ="dropdown-item">
                                    CSS 
                                </a>
                            </li>
                            <li>
                                <a class ="dropdown-item">
                                    PHP
                                </a>
                            </li>
                            <li>
                                <a class ="dropdown-item">
                                    JavaScript
                                </a>
                            </li>
                            <li>
                                <a class ="dropdown-item">
                                    More 
                                </a>  
                            </li>
                        </ul> <!-- End of Nested List -->
                    </li>
                    <li class = "nav-item">
                        <a class="nav-link" href="Index.php">News<a>
                    </li>
                    <li class = "nav-item">
                        <a class="nav-link" href="Index.php">Programmers<a>
                    </li>
                    <li class = "nav-item">
                        <a class="nav-link" href="../Webpages/signup.php">Sign Up<a>
                    </li>
                    <li class = "nav-item">
                        <a class="nav-link" href="../Webpages/login.php">Log In<a>
                    </li>
                </ul> <!-- End of Navbar Item List -->
            </div>
        </div>
    </nav>    
</header>    