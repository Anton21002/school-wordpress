
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
    <script type="text/javascript" id="rendered-js">// Wrap every letter in a span
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
        /*let table = document.querySelectorAll('table');
        table.forEach(element => {
            element.setAttribute('data-tilt', '');
        });*/
        
        const removeNode = (element) => {
            if (element.parentNode != null){
                element.parentNode.removeChild(element.parentNode);
            }
        }
        
        let aTag = document.getElementsByTagName("td");
        for (let i=0; i<aTag.length; i++){
            if (aTag.item(i).childElementCount > 0) {
                aTag.item(i).classList.add("hover");
            }else{

            }
        }
        
       /*Удаление тега который не содержит текста*/
        let hEmpty = document.getElementsByTagName("h3");
        for (let i = hEmpty.length - 1; i >= 0; --i){
            //console.log(hEmpty.item(i));
            if (hEmpty.item(i).textContent < 1) {
                hEmpty.item(i).parentNode.removeChild(hEmpty.item(i));
            }else{

            }
        }
        /*Удаление тега который не содержит текста-end*/
        /*Удаление пустого параграфа*/
        let pEmpty = document.getElementsByTagName("p");
        for (let i = pEmpty.length - 1; i >= 0; --i){
            if (pEmpty.item(i).textContent < 1) {
                pEmpty.item(i).parentNode.removeChild(pEmpty.item(i));
            }else{
            }
        }
        /*Удаление пустого параграфа-end*/
        /*Удаление класса "table"*/
        let findClassImg = document.getElementsByClassName("wp-block-image")
        for (let i=0; i<findClassImg.length; i++){
            findClassImg.item(i).parentElement.classList.remove("table");
        }
        let findClassGallery = document.getElementsByClassName("wp-block-gallery")
        for (let i=0; i<findClassGallery.length; i++){
            console.log(findClassGallery.item(i));
            findClassGallery.item(i).parentElement.classList.remove("table");
        }
        /*Удаление класса "table"-end*/
        /*Добавление Arrow в список*/
        let parentElement = document.getElementsByTagName('li');
        for (let i=0; i<parentElement.length; i++) {
            let theFirstChild = parentElement.item(i).firstChild;
            let newElement = document.createElement("i");
            parentElement.item(i).insertBefore(newElement, theFirstChild);
        }

        let iTag = document.getElementsByTagName("i");
        for (let i=0; i<iTag.length; i++){
            iTag.item(i).classList.add("fas", "fa-angle-right");
        }

        if (document.getElementById('category')!= null){
            let idCategory = document.getElementById("category");
            let removeClassCategory = idCategory.getElementsByTagName("i");
            for (let i = removeClassCategory.length - 1; i >= 0; --i) {
                removeClassCategory[i].remove();
            }
        }
        if (document.getElementById('footer')!= null){
            let idFooter = document.getElementById("footer");
            let removeClassFooter = idFooter.getElementsByTagName("i");
            for (let i = removeClassFooter.length - 1; i >= 0; --i) {
                removeClassFooter[i].remove();
            }
        }
        /*Добавление Arrow в список-end*/
        /*Добавление data-tilt атрибута*/
        let animationImg = document.getElementsByClassName("wp-block-image");
        for (let i=0; i<animationImg.length; i++){
            animationImg.item(i).setAttribute("data-tilt", "");
        }
        /*Добавление data-tilt атрибута-end*/
    </script>

</body>
</html>



