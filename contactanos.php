<?php include_once('./View/header.php'); ?>


<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>Contáctanos</h2>
                        <p>Para absolver tus dudas, rellena el formulario y te proporcionaremos la información necesaria.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Nombre">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Mensaje"></textarea>
                                <center><button type="submit" class="site-btn">Enviar</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>


<?php include_once('./View/plugins.php'); ?>

<?php include_once('./View/footer.php'); ?>
