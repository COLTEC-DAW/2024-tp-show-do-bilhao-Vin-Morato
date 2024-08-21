
<?php

    $enunciados = [
        "Em que ano foi fundado o COLTEC?",
        "Qual o local mais profundo do planeta?",
        "Com qual país o Mar Vermelho faz fronteira?",
        "Quais os personagens principais da Turma da Mônica?",
        "Qual o pintor responsável pala obra O grito?"
    ];

    $alternativas = [
        [
            "1971",
            "2001",
            "1983",
            "1969",
            "1987"
        ],
        [
            "Fossa das Filipinas",
            "Fossa das Marianas",
            "Taam-Ja",
            "Fossa de Java",
            "Poço de kola"
        ],
        [
            "Eritreia",
            "Iraque",
            "Líbia",
            "Chade",
            "Irã"
        ],
        [
            "Mônic, Cascão, Do Contra e Papa Capim",
            "Mônica, Cebolinha, Xaveco e Magali",
            "Mônica, Cascão, Cebolinha e Magali",
            "Mônica, Chico Bento, Cebolinha e Zé Léle",
            "Xaveco, Xaveco, Xaveco e Xaveco"
        ],
        [
            "Van Gogh",
            "Leonardo da Vinci",
            "Edvard Munch",
            "Salvador Dalí",
            "Johannes Vermeer"
        ]
    ];

    $alternativascorretas = [4, 2, 1, 3, 3];

    $nPerguntas = 5;

?>




<!DOCTYPE html>
<html>


    <body>
        <h1>Show do Milhão</h1>

        <?php  
            for ($i=0; $i < $nPerguntas; $i++) { 


                echo "<h2>" . ($i + 1) . $enunciados[$i] . "</h2>";
                echo "<ul>";
                
                for ($j=0; $j < $nPerguntas; $j++) { 
                    echo "<li>" . $alternativas[$i][$j] . "</li>";
                }
                echo "</ul>";
            }
        ?>


    <!-- <form>
    <fieldset>
        <legend>Fruit juice size</legend>
        <p>
        <input type="radio" name="size" id="size_1" value="small" />
        <label for="size_1">Small</label>
        </p>
        <p>
        <input type="radio" name="size" id="size_2" value="medium" />
        <label for="size_2">Medium</label>
        </p>
        <p>
        <input type="radio" name="size" id="size_3" value="large" />
        <label for="size_3">Large</label>
        </p>
    </fieldset>
    </form> -->



    </body>
</html>