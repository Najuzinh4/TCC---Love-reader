<?php
    $BUSCA = "";
    include_once("sidebar.php");
?>

<div class="container">
  <div class="audiobooks">
    <h3 class="d-inline-block">Audiobooks disponíveis:</h3> 
    <button id="playbtn" type="button" class="btn btn-primary float-right btn-lg" role="button" aria-expanded="false">Ouvir guia <i class="fas fa-play"></i></button>
    <p>Selecione um tema:</p>
  </div>
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#audiobutton1" role="button" aria-expanded="false" aria-controls="collapseExample">Folclore</button>
        <div class="collapse" id="audiobutton1">
          <div class="card card-body">
         Boto-cor-de-rosa
          <audio controls>
  <source src="audiobooks/folclore/botocorderosa.mp3" type="audio/mpeg">
</audio>
Iara
<audio controls>
  <source src="audiobooks/folclore/Iara.mp3" type="audio/mpeg">
</audio>
O pequeno saci
<audio controls>
  <source src="audiobooks/folclore/opequenosaci.mp3" type="audio/mpeg">
</audio>
          </div>
        </div>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#audiobutton2" role="button" aria-expanded="false" aria-controls="collapseExample">Ficção</button>
        <div class="collapse" id="audiobutton2">
          <div class="card card-body">
          A bruxa e o Caldeirão
          <audio controls>
  <source src="audiobooks/ficcao/abruxaeocaldeirao.wav" type="audio/mpeg">
</audio>
O gigante egoísta 
<audio controls>
  <source src="audiobooks/ficcao/ogiganteegoista.mpeg" type="audio/mpeg">
</audio>
          </div>
        </div>     
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#audiobutton3" role="button" aria-expanded="false" aria-controls="collapseExample">Contos de Fadas</button>
        <div class="collapse" id="audiobutton3">
          <div class="card card-body">
          A Bela e a Fera
          <audio controls>
  <source src="audiobooks/contosdefada/abelaeafera.mp3" type="audio/mpeg">
</audio>
A bela Adormecida
<audio controls>
  <source src="audiobooks/contosdefada/abelaadormecida.mp3" type="audio/mpeg">
</audio>
          </div>
        </div>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#audiobutton4" role="button" aria-expanded="false" aria-controls="collapseExample">Fábulas</button>
        <div class="collapse" id="audiobutton4">
          <div class="card card-body">
         A lebre e a Tartaruga
          <audio controls>
  <source src="audiobooks/fabulas/alebreeatartaruga.mpeg" type="audio/mpeg">
</audio>
A cigarra e a formiga
<audio controls>
  <source src="audiobooks/fabulas/acigarraeaformiga.mpeg" type="audio/mpeg">
</audio>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
</body>
<div class="read">
<audio src="audiobooks/reader.wav" type="audio/mpeg" id="teste" >
</audio>
  
</div>
</html>

<script type="text/javascript">

$("#teste")[0].onplaying = function(){
  console.log("akjdh");
  ret = prompt("Digite aqui:");
  name = "";
  switch (ret) {
    case '1':
      name = "Boto cor-de-rosa";
      break;
    case '2':
      name = "Iara";
      break;
    case '3':
    name = "O pequeno saci"
      break;
    case '4':
      name = "A bruxa e o Caldeirão";
      break;
    case '5':
      name = "O gigante egoísta";
      break;
     case '6':
      name = "A bela e a fera";
      break;
    case '7':
      name = "A bela adormecida";
      break;
    case '8':
      name = "A lebre e a tartaruga";
      break;
    case '9':
      name = "A cigarra e a formiga";
      break;

    default:
      break;
  }
  if (!name) return;
  $("#busca").val(name);
  $("#busca_form").submit();
}

$("#playbtn").on("click", function(){
  $("#teste")[0].currentTime = 0.01;
  $("#teste")[0].play();  
  
});


$(".collapse").on("show.bs.collapse", function(){
    let id = $(this).attr('id');
    $(".collapse").each(function() {
      let col = $(this).attr('id');
      if (col != id){
        $("#" + col).collapse('hide');
      }
    });
});
</script>