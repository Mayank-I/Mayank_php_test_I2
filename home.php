<?php
session_start();
include 'db.php';
$result=$conn->query('select*from book');
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-dark bg-dark"
            >
                <div class="container">
                    <a class="navbar-brand" href="#"><h4>HEllO <?~$_SESSION['username']?><h4></a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Book
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                            
                            <button
                                class="btn btn-outline-danger my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
           <div id="carouselId" class="carousel slide " data-bs-ride="carousel " height=400px >
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img
                        src="data:image/jpeg;base64,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"
                        class="w-100 d-block"
                        alt="First slide"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Book1</h3>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="data:image/jpeg;base64,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"
                        class="w-100 d-block"
                        alt="Second slide"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>book2</h3>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="data:image/jpeg;base64,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"
                        class="w-100 d-block"
                        alt="Third slide"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>book3</h3>
                        
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
           </div>
           <center><h3>book dashboard</h3></center>

            <div
                class="container"
            >
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <th>Book ID</th>
                            <th>Book Title</th>
                            <th>Author Name</th>
                            <th>Genre</th>
                            <th>Available Copies</th>
                            <th>Action</th>
                            <th>Action</th>
                        </thead>
                        <?php while($row=$result->fetch_assoc()){?>
                            <tr class="">
                                <td scope="row"><?php $row['id']?></td>
                                <td><?php $row['id']?></td>
                                <td><?php $row['booktitle']?></td>
                                <td><?php $row['authorname']?></td>
                                <td><?php $row['availablecopies']?></td>
                                <td><a href="edit.php?id=<?php $row['id']?>">Edit</a></td>
                                <td><a href="delete.php?id=<?php $row['id']?>">Delete</a></td>
                            </tr>
                            <?php }?>
                        
                    </table>
                </div>
                
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
