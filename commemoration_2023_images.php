<?php include_once("header-page.php") ?>
<section class="section-all--commemoration">
    <div class="row">
        <div class="u-center-text margin-bottom-title">
            <h2 class="heading-secondary">
               pictures & videos
            </h2>
        </div>
        <div class="commemoration">
        <div class="commemoration__item">
                <div class="card"><iframe class="card__img" src="https://www.youtube.com/embed/AcuvQwfaQNc?si=LZbSLvm5227Piedw"  frameborder="0" ></iframe>
                    <div class="card__content">
                        <h1 class="card__header">On The Grave Of OUANDIE</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img" src="https://www.youtube.com/embed/_u40U7VvMJc?si=wj7wYfCqk33jkggD" frameborder="0" ></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Baffoussam</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
            <div class="commemoration__item">
                <div class="card"><iframe class="card__img" src="https://www.youtube.com/embed/09yEIXu3BYo?si=qNnEDYnVZl5QeDNn" frameborder="0" ></iframe>
                    <div class="card__content">
                        <h1 class="card__header">Commemoration 2024</h1>
                        <p class="card__text">Look up at the night sky, and find yourself
                            in the amazing mountain range of Aspen. </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="commemoration__title">commemoaration in usa</h3> 
        </div>
        <div class="content_img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-1.jpeg" alt="commemoration-usa-2023-1">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-2.jpeg" alt="commemoration-usa-2023-2">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-3.jpeg" alt="commemoration-usa-2023-3">
            </div>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-4.jpeg" alt="commemoration-usa-2023-4">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-5.jpeg" alt="commemoration-usa-2023-5">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-6.jpeg" alt="commemoration-usa-2023-6">
            </div>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-7.jpeg" alt="commemoration-usa-2023-7">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-8.jpeg" alt="commemoration-usa-2023-8">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-9.jpeg" alt="commemoration-usa-2023-9">
            </div>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-10.jpeg" alt="commemoration-usa-2023-10">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-11.jpeg" alt="commemoration-usa-2023-11">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-12.jpeg" alt="commemoration-usa-2023-12">
            </div>
        </div>
        <div class="content-img">
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-13.jpeg" alt="commemoration-usa-2023-13">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-14.jpeg" alt="commemoration-usa-2023-14">
            </div>
            <div class="col-1-of-3">
                <img class="img1" id="img" src="img/commemoration-usa-2023-15.jpeg" alt="commemoration-usa-2023-15">
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


