<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $booktitle=$_POST['booktitle'];
    $authorname=$_POST['authorname'];
    $genre=$_POST['genre'];
    $totalcopies=$_POST['totalcopies'];
    $availablecopies=$_POST['availablecopies'];

    if($booktitle.empty()||$authorname.empty()||$genre.empty()||$totalcopies.empty()||$availablecopies.empty()){
        $sql=$conn->prepare('insert into book(booktitle,authorname,genre,totalcopies,availablecopies)values(?,?,?,?,?)');
        $sql->bind_param('sssii',$booktitle,$authorname,$genre,$totalcopies,$availablecopies);
       if ($sql->execute()) {
        header('location:home.php');
       } else {
        error;
       }
       
    }

}

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
            <!-- place navbar here -->
        </header>
        <main>
            <div
                class="container col-4"
            >
                <form action="" >
                    <div class="mb-3">
                        <label for="" class="form-label">Book Title</label>
                        <input
                            type="text"
                            class="form-control"
                            name="booktitle"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">author name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="authorname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Genre</label>
                        <input
                            type="text"
                            class="form-control"
                            name="genre"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Total Copies</label>
                        <input
                            type="text"
                            class="form-control"
                            name="totalcopies"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Available Copies</label>
                        <input
                            type="text"
                            class="form-control"
                            name="availablecopies"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <button type="submit">add</button>
                    
                    
                </form>
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
