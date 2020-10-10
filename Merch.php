<?php
require_once 'header.php';
echo
  '
  <div class="columns">
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
     <center> <img src="imagenesClub/green.jpeg" alt="Placeholder image">  </center>
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      </div>
    </div>

    <div class="content">
    <h5 class="card-title">Camisa con logo del Club de Manaties<br>Masculina</h5>
    <p class="card-text">$150</p>
    <a href="compra.php" class="card-link">view</a><br>'; 
      if (!$loggedin) {
        echo ' ';
      } else {
        echo ' <form method="POST" action="compra.php">
              <input type="hidden" name="variable1" value="PlayeraMasculinoManaties" />
              <input type="hidden" name="DES" value="SI" />
              <input type="hidden" name="Precio" value="150" />
             <button type="submit"><a href="compra.php">Buy</a></button>
             <div class="col-md-6 mb-6">
             <p > Eliga la talla</p>
             <select name="talla" required>
               <option value="EXCH">EXCH</option>
               <option value="CH">CH</option>
               <option value="M">M</option>
               <option value="G">G</option>
               <option value="EXG">EXG</option>
             </select>
             </div>
              </form>';
      }
   echo' </div>
  </div>
</div>
  </div>
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="imagenesClub/green2.jpeg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
      </div>
    </div>

    <div class="content">
    <h5 class="card-title">Camisa con logo del Club de Manaties<br>Femenina</h5>
    <p class="card-text">$150</p>
    <a href="imagenesClub/green2.jpeg" class="card-link">view</a><br>';
    if (!$loggedin) {
      echo ' ';
    } else {
      echo ' <form method="POST" action="compra.php">
            <input type="hidden" name="variable1" value="PlayeraFemeninoManaties" />
            <input type="hidden" name="DES" value="SI" />
            <input type="hidden" name="Precio" value="150" />
           <button type="submit"><a href="compra.php">Buy</a></button>
           <div class="col-md-6 mb-6">
           <p > Eliga la talla</p>
           <select name="talla" required>
             <option value="EXCH">EXCH</option>
             <option value="CH">CH</option>
             <option value="M">M</option>
             <option value="G">G</option>
             <option value="EXG">EXG</option>
           </select>
           </div>
            </form></div>';
    }
      
      
    echo '</div>
  </div>
</div>
  
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="imagenesClub/balon.jpeg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      </div>
    </div>
    <div class="content">
    <h5 class="card-title">Balon medida 7 con el logo del club!</h5>
    <p class="card-text">$300</p>
    <a href="imagenesClub/balon.jpeg" width="10%" class="card-link">view</a><br><br>';
    if (!$loggedin) {
      echo ' ';
    } else {
      echo ' <form method="POST" action="compra.php">
                   <div class="col-md-6 mb-6">
            <input type="hidden" name="variable1" value="Balon" />
            <input type="hidden" name="DES" value="NO" />
            <input type="hidden" name="Precio" value="300" />
           <button type="submit"><a href="compra.php">Buy</a></button>
           </div>
            </form>';
    }
     
   echo' </div>
  </div>
</div>
</div>
    <div class="columns">
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="imagenesClub/codera.jpg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">


    <div class="content">
    <h5 class="card-title">Codera</h5>
    <p class="card-text">$250 c/u</p>
    <a href="imagenesClub/codera.jpg" class="card-link">view</a> <br>';
     
      if (!$loggedin) {
        echo ' ';
      } else {
        echo ' <form method="POST" action="compra.php">
              <input type="hidden" name="variable1" value="Codera" />
              <input type="hidden" name="DES" value="SI" />
              <input type="hidden" name="Precio" value="250" />
             <button type="submit"><a href="compra.php">Buy</a></button>
             <div class="col-md-6 mb-6">
             <p > Eliga la talla</p>
             <select name="talla" required>
               <option value="EXCH">EXCH</option>
               <option value="CH">CH</option>
               <option value="M">M</option>
               <option value="G">G</option>
               <option value="EXG">EXG</option>
             </select>
             </div>
              </form>';
      }
    echo '</div>
  </div>
</div>
  </div>
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="imagenesClub/rodillera.jpg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
    </div>

    <div class="content">
    <h5 class="card-title">Rodillera</h5>
    <p class="card-text">$250 c/u</p>
    <a href="imagenesClub/rodillera.jpg" class="card-link">view</a> <br>';
     
      if (!$loggedin) {
        echo ' ';
      } else {
        echo ' <form method="POST" action="compra.php">
              <input type="hidden" name="variable1" value="Rodillera" />
              <input type="hidden" name="DES" value="SI" />
              <input type="hidden" name="Precio" value="250" />
             <button type="submit"><a href="compra.php">Buy</a></button>
             <div class="col-md-6 mb-6">
      <p> Eliga la talla</lp>
      <select name="talla" required>
        <option value="EXCH">EXCH</option>
        <option value="CH">CH</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="EXG">EXG</option>
      </select>
      </div>
              </form>';
      }
   echo' </div>
  </div>
</div>
  </div>
  <div class="column">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="imagenesClub/gorra.jpeg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
    <div class="content">
    <h5 class="card-title">Gorra con el logo del equipo</h5>
    <p class="card-text">$300</p>
    <a href="imagenesClub/gorra.jpeg" class="card-link">view</a><br>';
      
      if (!$loggedin) {
        echo ' ';
      } else {
        echo ' <form method="POST" action="compra.php">
              <input type="hidden" name="variable1" value="Gorra" />
              <input type="hidden" name="DES" value="SI" />
              <input type="hidden" name="Precio" value="300" />
             <button type="submit"><a href="compra.php">Buy</a></button>
              </form>';
      }
    echo' </div>
  </div>
</div>
  </div>
</div>  ';


?>