<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link rel="stylesheet" href="faq.css" />
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolic2y="no-referrer"
    />
  </head>
  <body>
  <div class="menu">
    <img class="menuFoto" src="pro.png" style="margin-left: 230px;" alt="">
    <img class="menuFoto" src="pro.png" alt="">
    <img class="menuFoto" src="pro.png" alt="">
    <img class="menuFoto" src="pro.png" alt="">
  </div>
    <div class="wrapper">
      <h1>FAQ</h1>
      <p>Veel gestelde vragen</p>
    <div class="faq">
        <button class="accordion">
        Voor wie is deze website bedoeld?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Deze website richt zich op ouderen die zolang mogelijk gezond en vitaal willen blijven en/of op ouderen die zo lang mogelijk thuis willen blijven wonen. 
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Is het doel van deze website om meer te bewegen?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Nee. Deze website zet bewegen in als middel om u te helpen en u te ondersteunen in het zo lang mogelijk zelfstandig kunnen uitvoeren van uw dagelijkse handelingen of activiteiten. U kiest zelf welke activiteiten dat zijn en wij zullen u adviseren welke oefeningen u ondersteunen zodat u gesterkt wordt in het zo lang mogelijk blijven doen van deze activiteiten.
          </p>
        </div>
      </div>
     <div class="faq">
        <button class="accordion">
        Is het volledig gratis?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Ja, alles is helemaal gratis
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Is deze website ook voor mensen met dementie geschikt?  
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Ja! Wat deze website zo uniek maakt is dat het programma ook op maat afgestemd kan worden op mensen met dementie. In het profiel kunt u of uw naaste aangeven of u een vorm van dementie heeft en in welk stadium u verkeert. Geeft u Ja aan, dan maken wij een programma, speciaal op u afgestemd.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Hoe is deze website tot stand gekomen?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        
          </p>
        </div>
      </div>
    </div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");
          var pannel = this.nextElementSibling;
          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>