
    <footer>
        <div id="footer" class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
                            <div class="map">
                            </div>
                            <div class="social-media">
                                <a class="facebook" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                <a class="youtube" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                                <a class="instagram" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="copyright">
                            Copyright © <?php echo date ( 'Y' ) ; ?> | Tallinna Pae Gumnaasium | All Rights Reserved
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
        
        //Проблема с добавлением класса .hover всем родителям с наличием тега <a>
        let aTag = document.querySelectorAll("a");
        for(let i=0; i<aTag.length; i++){
            if(aTag.item(i).parentElement = "<td>"){
                aTag.item(i).parentElement.classList.add("hover");
            }
        }
        
        
       /*Удаление тега который не содержит текста*/
        let hEmpty = document.getElementsByTagName("h3");
        for (let i = hEmpty.length - 1; i >= 0; --i){
            //console.log(hEmpty.item(i));
            if (hEmpty.item(i).textContent < 1) {
                hEmpty.item(i).parentNode.removeChild(hEmpty.item(i));
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
            let ulFooter = idFooter.getElementsByTagName("ul");
            
            for (let i=ulFooter.length -1; i>=0; --i){
            let removeClassFooter = ulFooter.item(i).getElementsByTagName("i");
                for (let i = removeClassFooter.length - 1; i >= 0; --i) {
                    removeClassFooter[i].remove();
                }
            }
            
            let AllTagI = idFooter.getElementsByTagName("i");
            console.log(AllTagI);
            for(i = AllTagI.length -1; i >= 0; --i){
                AllTagI.item(i).classList.remove("fas", "fa-angle-right");
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



