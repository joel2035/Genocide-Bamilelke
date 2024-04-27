<?php include_once("header-page.php") ?>

<section class="section-all--commemoration">
    <div class="row">
        <div class="u-center-text margin-bottom-title">
            <h2 class="heading-secondary">
                Images & videos
            </h2>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-1.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-2.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-3.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-4.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-5.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-6.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-7.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-7.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-9.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-10.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-11.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-12.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-13.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-14.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-15.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-16.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-17.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-18.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-19.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-20.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-21.jpeg" alt="image-taxi1">
            </div>

        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-22.jpeg" alt="image-taxi1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-23.jpeg" alt="image-taxi1">
            </div>

            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-24.jpeg" alt="image-taxi1">
            </div>

        </div>

        <div id="modal" class="modal">
            <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

    </div>


    </div>

    </div>

</section>

<?php include_once("footer.php") ?>

<script>
    var modal = document.getElementById('modal');

    var img = document.querySelectorAll('.img1');
    var modalImg = document.getElementById("img01");
    document.getElementById("caption");

    for (var i = 0; i < img.length; i++) {

        const element = img[i];
        element.onclick = function () {
            if (modal) {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

        }
    }

    var span = document.querySelectorAll(".close");

    for (var index = 0; index < span.length; index++) {
        const element1 = span[index];
        element1.onclick = function () {
            modal.style.display = "none";
        }
    }
</script>