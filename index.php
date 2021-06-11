<?php

require('./Includes/header.php');
require('./process.php');


?>


<!-- HERO=============================================================== -->
<section class="hero-section">
  <div id="heroDiv" class="hero">
    <h1 class="hero-heading w3-container w3-center w3-animate-right">
      life is great <br />
      Ping pong makes it better
    </h1>
    <img class="hero-picture" src="./img/top1.jfif" alt="player img">
    <img class="hero-picture " src="./img/top2.jfif" alt="player img">
  </div>
</section>

<!-- GALERIJA=============================================================== -->
<section id="galerijaDiv" class="galerija-section">
  <div class="section-header">
    <h2 class="h2-pav"> GALERIJA</h2>
    <p>Stalo tenisas ne tik smagus užsiėmimas, bet ir puiki aktyvi priemonė lavinanti judrumą, vikrumą, koordinaciją, reakciją, akių regėjimą bei suteikianti smagias akimirkas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, natus. A sapiente quia exercitationem doloribus. Repudiandae pariatur rerum tenetur omnis dolore natus illum eos voluptatem laborum quo, voluptas ratione quasi vitae, praesentium dolor! Rerum nulla quibusdam autem quos sunt! Veniam at impedit culpa recusandae maiores? Modi nihil deleniti quae dignissimos.
    </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="./img/club2.jpg" alt="klubo foto" class="galerija-img" onclick="myGalerija(this)">
    </div>
    <div class="column">
      <img src="./img/girsl playing.jpg" alt="girls play" class="galerija-img" onclick="myGalerija(this)">
    </div>
    <div class="column">
      <img src="./img/people playing.jpg" alt="people play" class="galerija-img" onclick="myGalerija(this)">
    </div>
    <div class="column">
      <img src="./img/men playing.jpg" alt="men playing" class="galerija-img" onclick="myGalerija(this)">
    </div>
  </div>
  <div class="g-container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg">
  </div>
  <div class="toTOP-container">
    <a id="toTop" href="#"><i class="fa fa-angle-double-up top-icon" aria-hidden="true"></i></a>
    <a class="toTop-link" href="#">BACK TO TOP</a>
  </div>
</section>

<!-- TRAINERS=============================================================== -->
<section id="trainersDiv" class="section-trainers">

  <div class="section-header">
    <h2 class="h2-pav"> TRENERIAI</h2>
    <p>Ilgametę darbo patirtį turintys, patys aktyviai sportuojantys treneriai, kviečia prisijungti vaikus, suaugusius, senjorus tiek grupinėse, tiek asmeninėse treniruotėse. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, commodi dolores repudiandae nemo eveniet dignissimos aut nisi quos est, accusantium voluptatibus. Unde suscipit quos eius necessitatibus totam quisquam provident sint porro at, facilis, qui atque nam voluptas delectus reprehenderit! Quasi amet saepe impedit porro officia atque, iste dicta aspernatur libero.</p>
  </div>

  <div class="trainers-container">

    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris1.jpg" alt="treneris">
      <h4> Tomas Tomukas</h4>
      <p>Treneris</p>
    </div>

    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris2.jpg" alt="trenerė">
      <h4> Gabrielė Garbrielytė</h4>
      <p>Trenerė</p>
    </div>

    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris3.jpg" alt="trenerė">
      <h4> Justina Justinytė</h4>
      <p>Trenerė</p>
    </div>
    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris2.jpg" alt="trenerė">
      <h4> Justina Justinytė</h4>
      <p>Trenerė</p>
    </div>

    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris4.jpg" alt="trenerė">
      <h4> Gabrielė Garbrielytė</h4>
      <p>Trenerė</p>
    </div>

    <div class="trainer-col">
      <img class="trainers-img" src="./img/treneris1.jpg" alt="treneris">
      <h4> Tomas Tomukas</h4>
      <p>Treneris</p>

    </div>
  </div>

  <div class="toTOP-container">
    <a id="toTop" href="#"><i class="fa fa-angle-double-up top-icon" aria-hidden="true"></i></a>
    <a class="toTop-link" href="#">BACK TO TOP</a>
  </div>

</section>

<!-- KAINOS IR LAIKAS=============================================================== -->
<section id="kainosDiv" class="section-kainos">
  <div class="section-header">
    <h2 class="h2-pav">DARBO LAIKAS IR KAINOS</h2>
  </div>


  <div class="kainos-section-container">
    <div class="both-table-container">

      <div class=" flip-box">

        <div class="table-container flip-box-inner">
          <div class=" flip-box-front">
            <h2 class="h2-pav"> GRUPĖS IR LAIKAS</h2>
            <img src="./img/ballsBtf.jfif" alt="img of balls">
          </div>

          <table class="table-main flip-box-back">
            <thead>
              <tr>
                <th colspan="4">Vaikų grupės </th>
              </tr>
              <tr>
                <th>Dienos</th>
                <th>Laikas</th>
                <th>Telefono Nr.</th>
                <th>Pastaba</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>I-IV</td>
                <td>nuo 14:30</td>
                <td>+370 635 24401</td>
                <td> 5 - 8 metų vaikams</td>
              </tr>
              <tr>
                <td> I, III, V</td>
                <td>17:30 - 18:30</td>
                <td>+370 684 26179</td>
                <td></td>
              </tr>
              <tr>
                <th colspan="4">Suaugusiųjų grupės </th>
              </tr>
              <tr>
                <td>I-V</td>
                <td>17:00 - 21.30</td>
                <td>+370 684 26179</td>
                <td></td>
              </tr>
              <tr>
                <td>VI</td>
                <td>10:00 - 14:00</td>
                <td colspan="2">Būtina išankstinė rezervacija</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>



      <!-- <div class="table-container"> -->
      <div class=" flip-box">

        <div class="table-container flip-box-inner">
          <div class=" flip-box-front">
            <h2 class="h2-pav"> KAINOS</h2>
            <img src="./img/price.jfif" alt="euro icon">
          </div>

          <table class="table-main flip-box-back">
            <thead>
              <tr>
                <th colspan="4"> Įkainiai</th>
              </tr>
              <tr>
                <th>Kartai/mėn.</th>
                <th>Stalo kaina 1 val.</th>
                <th>1 val.</th>
                <th>Vaikams</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>8 Eur (stalas)</td>
                <td>4 Eur (asmeniui)</td>
                <td>3 Eur</td>
              </tr>
              <tr>
                <td>10</td>
                <td></td>
                <td>35 Eur</td>
                <td>20 Eur</td>
              </tr>
              <tr>
                <td>15</td>
                <td></td>
                <td>50 Eur</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="toTOP-container">
    <a id="toTop" href="#"><i class="fa fa-angle-double-up top-icon" aria-hidden="true"></i></a>
    <a class="toTop-link" href="#">BACK TO TOP</a>
  </div>
</section>

<!-- TENISO PAGRINDAI=============================================================== -->
<section id="lessons-section">

  <div class="section-header">
    <h2 class="h2-pav"> STALO TENISO PAGRINDAI</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor inventore accusantium quia repellendus vero. Obcaecati, excepturi nam porro labore vitae, cupiditate nesciunt tempore dicta ex illo temporibus dolor doloribus fugiat? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus id nesciunt nam assumenda laborum. Neque ullam voluptatem molestias quisquam? Quas nisi similique laudantium, neque consequuntur odio tempora repudiandae voluptas? Fuga iusto sit tenetur, quis facilis illum adipisci quos beatae autem fugiat perspiciatis dolor ut ad provident cum numquam suscipit voluptates. </p>
  </div>

  <div class="lessons-container">
    <button class="accordion">PAMOKA 1</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ipsam consequatur in dolor tenetur adipisci culpa maxime doloribus minus nemo est neque incidunt reiciendis recusandae illo aspernatur voluptate, provident porro aliquam. Provident temporibus dolorum unde porro autem corporis numquam, aspernatur omnis aliquid tempore magni molestiae aut eius repudiandae ut doloremque quas cumque quia distinctio maiores commodi totam beatae. Corporis eum fuga hic, ipsa molestiae possimus consectetur minima in obcaecati voluptate ex commodi alias eaque voluptates a dolores itaque doloribus est veniam esse ratione ipsam delectus dolorum iure! Maiores ut id pariatur. Nisi, earum! Minus hic vero dolor explicabo debitis animi veniam fugiat incidunt iusto velit, nulla reiciendis cumque quidem blanditiis odit consequuntur quis tempora modi temporibus laboriosam rem doloremque? Aperiam, eveniet velit. Commodi laudantium veritatis earum blanditiis dignissimos nobis, fuga itaque expedita excepturi harum corporis. Reprehenderit minus aspernatur illum. Temporibus iste voluptates, debitis eius deleniti quidem aliquam eaque, magni eos nulla facilis fuga ratione et accusamus voluptatibus ipsum officia quaerat repellendus itaque nostrum magnam beatae tempore illo? Voluptates reiciendis rerum quaerat quia laborum ratione itaque cumque nulla esse neque? Laboriosam, dolore? Vel, quasi ipsam repellat corporis dignissimos exercitationem, fugiat, omnis totam itaque sapiente eos animi et consequatur nam quis eius?</p>
    </div>


    <button class="accordion">PAMOKA 2</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">PAMOKA 3</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic repellat atque illo fugit sequi impedit soluta ipsum inventore veritatis magnam, officiis minus molestiae fugiat beatae harum nemo illum temporibus nesciunt amet suscipit distinctio. Rerum autem commodi deserunt quasi nulla atque incidunt id unde itaque, voluptatum consectetur voluptas rem possimus deleniti?</p>
    </div>
    <button class="accordion">PAMOKA 4</button>
    <div class="panel">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea porro nisi officia, modi esse doloremque amet sunt, corporis nobis fuga natus corrupti obcaecati possimus quisquam at, atque quo fugiat omnis eos laboriosam eaque autem praesentium quam nostrum! Quae, sed! Quia totam, impedit omnis asperiores quas perspiciatis atque corrupti? Magni eos aspernatur unde consequatur mollitia minus nihil dolor culpa autem cumque illum atque, quibusdam iure doloremque optio totam eum corrupti fugiat, nostrum quasi officiis enim quos sunt? Veritatis tempore quibusdam neque suscipit. Quos consequuntur ad nostrum in eligendi dolore accusamus fuga consequatur error expedita optio laboriosam nisi quo ex ipsam itaque consectetur omnis unde voluptatem tenetur recusandae, reiciendis ea aspernatur illo. Ad ipsa debitis fuga. Porro cupiditate nesciunt, nulla velit ducimus fugiat eum obcaecati facilis repellat doloribus enim dolore aut quidem qui modi praesentium, hic ipsa! Aut expedita error porro, laboriosam aliquam facilis magni, accusamus vero labore quam obcaecati et laudantium, veritatis ullam illum molestiae repellat cupiditate saepe vel soluta. Sequi, vel iste dignissimos tempora tenetur atque quaerat sed non architecto suscipit facere qui possimus quia nihil hic cum maxime quidem laboriosam. Libero quasi ut fugit suscipit, voluptatem error perspiciatis! A possimus magni eaque doloremque blanditiis neque nisi id. Porro illo provident, corporis id laborum earum hic optio, dolorem ad molestias nemo, minima repellat temporibus? Quod laboriosam hic sed rerum voluptas, illum sapiente consequuntur numquam officia reprehenderit ratione nemo quos harum odit voluptatibus delectus atque at, quas perspiciatis minus autem nostrum? Mollitia quaerat neque distinctio est provident nostrum tenetur laborum sequi autem, corrupti corporis commodi? Sit dolor temporibus soluta similique a, at architecto ipsum iste minus possimus eius eum maiores nemo accusamus quos porro unde sunt amet quia veritatis necessitatibus ut minima quod? Libero nisi quae voluptates a, molestiae numquam mollitia consequuntur, perferendis accusantium ullam facere quia dignissimos omnis, repellendus corrupti.</p>
    </div>
    <button class="accordion">PAMOKA 5</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repellat, accusamus, rerum fugiat non error et quod deserunt quisquam optio aspernatur autem dolores animi hic itaque qui earum ullam impedit quidem ipsa cum dolore. Corporis ipsa molestiae placeat quia beatae aliquid hic cum, soluta incidunt quam asperiores, quod nisi corrupti excepturi. Nulla quaerat a tempore molestias nobis. Iste, voluptates sapiente, ut pariatur minima inventore non sed ipsa consectetur itaque doloribus cumque. Voluptates adipisci ducimus ab distinctio minima, alias at autem quasi nisi explicabo reprehenderit possimus illum consequuntur reiciendis neque facere odio quia ad doloremque. Earum, illum error deleniti reprehenderit modi ipsum obcaecati tenetur tempora eveniet soluta maxime voluptate itaque mollitia natus hic sunt incidunt a repudiandae eaque vitae ducimus? Distinctio, odit! Ex aliquid atque alias, nulla saepe repellendus voluptatum! Corporis, nam dolorum, id nostrum laudantium ipsam quae perferendis autem iusto obcaecati libero quos, pariatur vitae velit quidem ab tempora porro beatae! Dignissimos, ipsum eos. Iste modi a veritatis molestiae animi est? Rem aliquid nisi ea totam ad error quia placeat magnam earum amet ducimus iste praesentium, minima unde repellat repellendus atque laboriosam facilis. Tenetur nam eos, quia sint dolorem nemo? Harum repellat tempore alias dicta molestias porro aspernatur voluptas rem.</p>
    </div>
    <button class="accordion">PAMOKA 6</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>

  <div class="toTOP-container">
    <a id="toTop" href="#"><i class="fa fa-angle-double-up top-icon" aria-hidden="true"></i></a>
    <a class="toTop-link" href="#">BACK TO TOP</a>
  </div>
</section>

<!--FORMA REZERVACIJA=============================================================== -->
<section class="section-form">

  <div class="section-header">
    <h2 class="h2-pav"> STALO REZERVACIJA</h2>
    <p>Kad galėtumėt mėgautis stalo tenisu ir nereikėtų laukti laisvo stalo, rezervuokite jį iš anksto! <br> Žinutėje parašykite rezervacijos laiką ir kiek laiko sportuosite. Mes su jumis susisieksime.</p>
  </div>


  <div id="rezervacijaDiv" class="rezerved-div">

    <div class="form-container">


      <form name="myform" action="index.php#rezervacijaDiv" autocomplete="off" class="rezervacijos-forma" method="POST">
        <ul class="form-style">
          <li class="form-li">
            <label class="form-label ">Vardas Pavarde<span class="required">*</span></label>
            <input type="text" required class="long-input" name="name" autocomplete="off" placeholder="Vardas" value="<?php echo $name ?>">
            <div id="name-err" class="input-error"> <?php echo "$nameErr" ?></div>
          </li>

          <li class="form-li">
            <label class="form-label">Telefono Nr. 370xxxxxxxx <span class="required">*</span></label>
            <input type="tel" required class="long-input" autocomplete="off" name="phone" pattern="[0-9]{11}" placeholder="Telefono Nr. 370xxxxxxxx" value="<?php echo "$phone" ?>">
            <div id="phone-err" class="input-error"> <?php echo "$phoneErr" ?></div>
          </li>

          <li class="form-li">
            <label class="form-label">Pasirinkite stalo Nr. <span class="required">*</span></label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 1') echo 'checked' ?>value="Nr. 1"> <label for=""> Nr. 1</label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 2') echo 'checked' ?>value="Nr. 2"> <label for=""> Nr. 2</label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 3') echo 'checked' ?>value="Nr. 3"> <label for=""> Nr. 3</label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 4') echo 'checked' ?>value="Nr. 4"> <label for=""> Nr. 4</label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 5') echo 'checked' ?>value="Nr. 5"> <label for=""> Nr. 5</label>
            <input type="radio" name="stalas" required <?php if ($stalas === 'Nr. 6') echo 'checked' ?>value="Nr. 6"> <label for=""> Nr. 6</label>
            <div class="input-error"><?php echo $stalasErr ?></div>
          </li>

          <li class="form-li">
            <label class="form-label long-input">Jūsų žinutė </label>
            <textarea class="long-input" name="body"></textarea>
          </li>
          <li class="form-li">
            <button id="rezervuotiBtn" class="form-btn long-input" type="submit" name="submit">Rezervuoti</button>
            <p id="confirm-form" class="confirm-form"> </p>
          <li class="form-li">
        </ul>
    </div>
    </form>

  </div>
  </div>

  <div class="toTOP-container">
    <a id="toTop" href="#"><i class="fa fa-angle-double-up top-icon" aria-hidden="true"></i></a>
    <a class="toTop-link" href="#">BACK TO TOP</a>
  </div>
</section>

<?php
require('./Includes/footer.php');
?>