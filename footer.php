
    <footer>
        <div id="footer" class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-between">
                        <div class="col-lg-3">
                            <div class="table">
                                <h3>Контакты</h3>
                                <p>
                                    Tallinna Pae Gumnaasium<br>
                                    Pae 5, 11414 Tallinn Lasnamäe<br>
                                    Kooli registrinumber: 75016935<br>
                                </p>
                                <ul>
                                    <li class="phone-active">
                                        <a href="tel:+3726210230">+372 6210230</a>
                                    </li>
                                    <li class="mail-active">
                                        <a href="mailto:pae@pae.tln.edu.ee">pae@pae.tln.edu.ee</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="map">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="table">
                                <h3>Полезные ссылки</h3>
                                <ul>
                                    <li><a href="">BigBlueButton</a></li>
                                    <li><a href="">CAE Eeltest link</a></li>
                                    <li><a href="">HKK</a></li>
                                    <li><a href="">VKK</a></li>
                                    <li><a href="">Галерея</a></li>
                                </ul>
                            </div>
                            <div class="table">
                                <h3>Партнеры и проекты</h3>
                                <ul>
                                    <li><a href="">Comenius Project</a></li>
                                    <li><a href="">Tervist Edendavad Kool</a></li>
                                    <li><a href="">Keelekümbluskeskus</a></li>
                                    <li><a href="">eKool</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="table">
                                <h3>Ссылки</h3>
                                <ul>
                                    <li><a href="">Linna töötaja portaal</a></li>
                                    <li><a href="">Heategevusfond</a></li>
                                    <li><a href="">INNOVE AS</a></li>
                                    <li><a href="">HKK töölehed</a></li>
                                    <li><a href="">Tallinna Haridusamet</a></li>
                                    <li><a href="">Haridus- ja Teadusministeerium</a></li>
                                    <li><a href="">Põhikooli ja gümnaasiumiseadus</a></li>
                                    <li><a href="">Jyoshinmon Karate</a></li>
                                    <li><a href="">Lasnamäe Lastekeskus</a></li>
                                    <li><a href="">E-Kool</a></li>
                                    <li><a href="">GeniUS Tallinn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="copyright">
                            Copyright © 2021 <strong>Tallinna Pae Gumnaasium</strong>. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <?php wp_footer(); ?>
    <script id="rendered-js">// Wrap every letter in a span
        $('.flip .letters').each(function(){
          $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
        });

        // Using anime.js library
        var mirror = anime.timeline({
          loop: false,
          duration: 4100  
        })

        mirror
        .add({
          targets: '.letter',
          rotateY: [0, -90],
          easing: "easeInCubic",
          duration: 2000
        })
        .add({
          targets: '.flip',
          scaleX : [-1, 1],
          easing: "easeInCubic",
          duration: 1
        })
        .add({
          targets: '.letter',
          rotateY: [-90, 0],
          easing: "easeOutCubic",
          duration: 2000
        })
    </script>

</body>
</html>



