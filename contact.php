<?php include_once("header-page.php") ?>
<section class="section-contact">
    <div class="row">

        <div class="u-center-text margin-bottom-title">
            <h2 class="heading-secondary">
                Contact
            </h2>
        </div>
        <div class="contact">
            <div class="contact_page">
                <div class="u-center-text margin-bottom-title">
                    <h3 class="heading-secondary book_title">
                        Join us for our community
                    </h3>
                </div>
                <div class="contact_form">
                    <form action="" class="form" role="form" method="POST">
                        <div class="form__group">
                        <input id="name" class="form__input" type="text" placeholder="Full name" name="name" value="" required>
                        </div>
                        <div class="conatact_form__group">
                        <input id="email" class="form__input"type="email" name="email" placeholder="Email adress" value="" required>
                        </div>
                        <div class="conatact_form__group">
                        <textarea required placeholder="Your Message" name="message" class="form__input area" id="message" rows="6" cols="50"></textarea>
                        </div>
                        <div class="conatact_form__group">
                    <button class="btn btn--aqua" type="submit" name="submit" value="envoyer">Submit</button>
                </div>
                    </form>
                </div>

            </div>
        </div>

        <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('genocidebamileke@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
    </div>
</section>
<?php include_once("footer.php") ?>