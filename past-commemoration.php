<?php include_once("header-page.php") ?>
<section class="section-all--commemoration">
    <div class="row">
        <div class="u-center-text margin-bottom-title">
            <h2 class="heading-secondary">
                past Commemoration
            </h2>
        </div>
        <!--
        <div class="commemoration">
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/CGr7Y2jFXn0?si=RoKeWvzWP85BPg37" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">past Commemoration</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/ncYZR3xcLnc?si=dMw6YRW_u693nHfm" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/qeSq5JjVTj8?si=IjlUdieFSCyI_0Ci" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/RR5J318uc78?si=g6EWuFJc_Po3-qgL" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/lJvc-9u94gQ?si=MPVroYOHdI-QM-Lc" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img"
                        src="https://www.youtube.com/embed/F6YZpzIUjAs?si=OelnDZHBjxsygcnC" frameborder="0"></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
        </div>
        !-->

        <div class="content_img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-1.jpeg" alt="past-commemoration-1.jpeg">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-2.jpeg" alt="past-commemoration-2">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-3.jpeg" alt="past-commemoration-3">
            </div>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-4.jpeg" alt="past-commemoration-4">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-5.jpeg" alt="past-commemoration-5">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/past-commemoration-6.jpeg" alt="past-commemoration-6">
            </div>
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
    let modal = document.getElementById('modal');

    let img = document.querySelectorAll('.img1');
    let modalImg = document.getElementById("img01");
    document.getElementById("caption");

    for (let i = 0; i < img.length; i++) {
        const element = img[i];
        element.onclick = function () {
            if (modal) {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

        }
    }

    let span = document.querySelectorAll(".close");

    for (let index = 0; index < span.length; index++) {
        const element1 = span[index];
        element1.onclick = function () {
            modal.style.display = "none";
        }
    }
</script>