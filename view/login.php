<?php require('header.php'); ?>
<style>
    .center {
        margin: 10px 5% 0px 5% ;
    }
</style>

<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ms-2" href="../index.php">Sorteos</a>
        <button class="btn btn-primary my-2 my-sm-0 ms-auto me-2" type="submit">Login</button>
    </nav>
</section>
<section class="center">
    <form action="../index.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="i.e Juan...">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*****">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>

<?php require('footer.php'); ?>