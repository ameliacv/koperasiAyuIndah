
<!-- iki konten -->
<div class="small-12 medium-8 medium-push-4 large-9 large-push-3 columns">

    <h1 class="text-center">Login Form</h1>

    <form action="plogin.php" method="post">

        <div class="row">

            <div class="small-12 medium-6 large-4 column">Username</div>
            <div class="small-12 medium-6 large-5 column"><input type="text" placeholder="Username" name="username" required="" id="username" /></div>

        </div>
        <div class="row">

            <div class="small-12 medium-6 large-4 column">Password</div>
            <div class="small-12 medium-6 large-5 column"><input type="password" placeholder="Password" name="password" required="" id="password" /></div>

        </div>
       
        <div class="row">
            <?php
            $h = $_GET['kk'];
            if (isset($_GET['kk'])) {
                ?>
            <label style="color: red; text-align: center ; "><strong>Invalid Username Or Password</strong></label>
            <?php
                
            }
            ?>
        </div>

        <div class="row">
            <div class="small-12 medium-5 large-5 column"></div>
            <div class="small-12 medium-6 large-8 column"><input type="submit" name="submit" class="button" value="Login" /></div>

        </div>

    </form>

</div>
<!-- entek-entekane konten -->
