<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "Home Page";
        require_once('./include/head.php');
    ?>
<body>
    <?php
        require_once('./include/header.user.php');
    ?>
    <main class="container-fluid">
        <!-- Jumbotron which showcases the website -->
        <div class="p-5 mb-2 bg-body-tertiary">
            <div class="container-fluid py-5 vh-50">
                <h1 class="display-5 fw-bold">CoLib</h1>
                    <p class="col-md-8 fs-4">Bringing you the simple, best, and yet open-source codes throughout the web!</p>
                <a href="Card-Deck-Code-Library">
                    <button class="btn btn-primary btn-dark btn-lg" type="button">Start Browsing</button>
                </a>
            </div>
        </div>


        <div class="container-fluid mb-2 flex-column align-items-center">
            <div class="container-fluid d-md-flex justify-content-end align-content-end my-2">
                <form method="post" action="" class="d-flex">
                    <div class="input-group">
                        <input type="search" class="form-control rounded w-25" placeholder="Search" name="search"/>
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-init><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
                <select class="form-select text-dark mx-2" id="" style="max-width: 14em">
                    <option selected>Select Format... <i class="fa fa-sort-desc" aria-hidden="false"></i></option>
                    <option value="C++">C++</option>
                    <option value="Javascript">Javascript</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value="More">More</option>
                </select>
                <button class="btn btn-outline-secondary btn-add" type="button"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
            </div>

            <div class="container-fluid m-0 p-0" id="Card-Deck-Code-Library">
                <div class="row row-md-auto m-2">
                    <div class="col">
                        <a href ="../Webpages/login.php" style="text-decoration: none">
                            <div class="card border-dark mb-2">
                                <div class="card-body text-dark">
                                    <h5 class="card-title mb-2 code_title">Creating a Basic Navbar with CSS</h5>
                                    <h5 class="card-text border-dark format">HTML/CSS</h5>
                                    <p class="card-text description">A very basic Navbar made from HTML and CSS</p>
                                </div>
                            </div>
                         </a>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">   
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-md-auto m-2">
                    <div class="col">
                        <a href ="../Webpages/login.php" style="text-decoration: none">
                            <div class="card border-dark mb-2">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                         </a>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">   
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-md-auto m-2">
                    <div class="col">
                        <a href ="../Webpages/login.php" style="text-decoration: none">
                            <div class="card border-dark mb-2">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                         </a>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">   
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-md-auto m-2">
                    <div class="col">
                        <a href ="../Webpages/login.php" style="text-decoration: none">
                            <div class="card border-dark mb-2">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                         </a>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">   
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-2">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="container-fluid d-flex flex-column justify-content-center align-items-center my-4">
                <nav aria-label="Page navigation example" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

                <select class="form-select text-dark mx-2" id="" style="max-width: 14em">
                    <option selected>15 Pages</option>
                    <option value="30">30 Pages</option>
                    <option value="45">45 Pages</option>
                    <option value="60">60 Pages</option>
                </select>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-fluid p-1" style="background: #3D5A80">
          <hr class="my-3" />
            <section class="">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-light p-4">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                    distinctio earum repellat quaerat voluptatibus placeat nam,
                    commodi optio pariatur est quia magnam eum harum corrupti
                    dicta, aliquam sequi voluptate quas.
                  </p>
                </div>
              </div>
            </section>

            <section class="text-center mb-4">
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-facebook-f"> </i>
                </a>
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-twitter"> </i>
                </a>
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-google"> </i>
                </a>
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-instagram"> </i>
                </a>
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-linkedin"> </i>
                </a>
                <a href="" class="text-white me-4" style="text-decoration: none">
                  <i class="fab fa-github"> </i>
                </a>
            </section>
            <div class="text-center text-light p-2" style="background-color: rgba(0, 0, 0, 0.2)">
                <h4>© 2023 Copyright: CoLib</h2>
            </div>
        </div>
    </footer>
    <?php 
        require_once('./include/js.php');
    ?>
    <script src="./tools/pagination.js"></script>
</body>
</html>