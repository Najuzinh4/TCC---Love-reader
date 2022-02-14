<?php
    $BUSCA = "";


    if(isset($_POST["busca"]) )
    {
        $BUSCA = $_POST["busca"];
        issetfuncion("select * from audio_books where soundex(nome) = soundex('$BUSCA')");
        
    }
    else{
        issetfuncion("select * from audio_books");
        exit();
    }


    function issetfuncion($sql){
        include_once("sidebar.php");

        $con = mysqli_connect("localhost","root","","tcc") or die("Erro!");
        $result = mysqli_query($con, $sql);
        
        if(!($result = mysqli_query($con, $sql))){
            echo "<p>Ocorreu um erro </p>";
            return;
        }
                
        $reg = mysqli_fetch_array($result);
        if (!$reg){
            echo "Não há audiobooks relacioados com a sua busca";
            return;
        }
        ?>
        <div class="container">
            <div class="audiobooks">
                <p>Nome:
                <?php echo $reg["nome"]; ?> </br> Categoria:  <?php echo $reg["categoria"]; ?> </br>
                Audiobook:
                 </p>
                <audio controls>
                    <source src="<?php echo $reg["arquivo"].".".$reg["file_type"] ?>" type="audio/mpeg">
                </audio>
            </div>
    </div>
        <?php
        return;
    }
        ?>


</div> 
</body>
</html>