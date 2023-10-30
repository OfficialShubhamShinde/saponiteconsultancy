<?php $currentPage = 'events&media'; ?>
<?php include("_header.php"); ?>


<div class="container" style="background: cover;">
    <img class="mySlides" src="img/eventsandmedia/4.jpg" style="width:100%;">
    <img class="mySlides" src="img/eventsandmedia/2.JPG" style="width:100%">
    <img class="mySlides" src="img/eventsandmedia/3.JPG" style="width:100%">
</div>

<div class="w3-center">
    <br>
    <center>
        <div class="w3-section">
            <button class="w3-btn" onclick="plusDivs(-1)">❮ Prev</button>
            <button class="w3-btn" onclick="plusDivs(1)">Next ❯</button>
        </div>
    </center>
    <br>
</div>




<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length };
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-red";
    }
</script>

<?php include("_footer.php"); ?>