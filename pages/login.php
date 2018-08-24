<?php include '../components/header.php'; ?>

<div class="container">
    <div class="body text-center">
        <div>
            <form action="http://movie.scorewinner.ch/login" method="post"  class="form-signin">
            	<img class="mb-4" src="../assets/images/logo.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <label for="inputText" class="sr-only">Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username" required="" autofocus="">

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>
<?php include '../components/footer.php'; ?>
