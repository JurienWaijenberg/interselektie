<?php get_header(); ?>
<section class="banner">
        <img src="http://interselektie.local/wp-content/uploads/2024/06/lachende-vrouw.jpg" alt="">
        <!-- <h2>test</h2> -->
</section>


<section class="contact max-width spaceSides">

<section class="contactLinks">

    <section class="introUitzendSoort contactIntro">
        <div>
            <i class="fa-solid fa-circle"></i>
            <h2>Neem contact met ons op</h2>
        </div>
        <p>
        Heb je interesse in onze vacatures of wil je meer weten over onze diensten? 
    Aarzel niet om contact met ons op te nemen! Laat je gegevens achter in het 
    contactformulier en we zullen zo spoedig mogelijk met je in contact komen. 
        </p>
    </section>

    <section>

    <article>
        <ul>
            <li>
                <i class="fa-solid fa-location-dot"></i>
                <div>
                  <p>Bezoekadres</p>
                    <p>Provincialeweg 21-A</p>
                    <p>1561 KL  Krommenie </p>
                </div>
            </li>

            <li>
                <i class="fa-solid fa-phone"></i>
                <div>
                <p>Telefoonnummer</p>
                    <p>075 621 8845</p>
                </div>
            </li>

            <li>
                <i class="fa-solid fa-paper-plane"></i>
                <div>
                <p>E-mailadres</p>
                <p>info@interselektie.nl</p>
                </div>
            </li>
        </ul>
    </article>

    <article class="openingstijden">
        <p>Onze openingstijden </p>

        <ul>
            <li>
                <p><span>Maandag</span>8:30 tot 17:30</p>
                <p><span>Disndag</span>8:30 tot 17:30</p>
                <p><span>Woensdag</span>8:30 tot 17:30</p>
                <p><span>Donderdag</span>8:30 tot 17:30</p>
                <p><span>Vrijdag</span>8:30 tot 17:30</p>
                <p><span>Zaterdag</span>gesloten</p>
                <p><span>Zondag</span>gesloten</p>
            </li>
        </ul>
    </article>
    </section>


    <div style="width: 100%">
        <iframe 
        width="100%" 
        height="300" 
        frameborder="0" 
        scrolling="no" 
        marginheight="0" 
        marginwidth="0" 
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Provincialeweg%2021-A+(Interselektie)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        <a href="https://www.gps.ie/">gps tracker sport</a>
        </iframe>
    </div>
</section>

    
<section class="contactFormulier">

    <h2>Contactformulier</h2>

    <form action="contact.php" method="post">
        <label for="name"><p>Naam</p></label>
        <input type="text" id="name" name="name" required>

        <label for="email"><p>E-mailadres</p></label>
        <input type="email" id="email" name="email" required>

        <label for="message"><p>Bericht</p></label>
        <textarea id="message" name="message" required></textarea>

        <label for="privacy">
            <input type="checkbox" id="privacy" name="privacy" required>
            <p>Ja, ik ga akkoord met het <a href="privacybeleid.html" target="_blank">privacybeleid</a> van Interselektie</p> 
        </label>

        <button class="redBtn form" type="submit">Versturen</button>
    </form>

</section>

</section>




<?php get_footer(); ?>