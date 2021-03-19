<?php 

	if (isset($_POST['box1']) && isset($_POST['box2']) && isset($_POST['box3']) && isset($_POST['box4'])) 
	{
		$box1 = $_POST['box1'];
		$box2 = $_POST['box2'];
		$box3 = $_POST['box3'];
		$box4 = $_POST['box4'];
	
	if ($box1 >= 0 && $box1 <= 255 && $box2 >= 0 && $box2 <= 255 && $box3 >= 0 && $box3 <= 255 && $box4 >= 0 && $box4 <= 255) 
	{
		if (($box1 == 192 && $box2== 168) || $box1 == 10) 
		{
    		echo "Endereço privado ";
		}
		elseif ($box1 == 172 && $box2 >= 16 && $box2 <= 31) 
		{
			echo "Endereço privado ";
		}
		else
		{
    		echo "Endereço publico, reservado ";
		}


		if ($box1 >= 1 && $box1 <= 126) {

			echo "Classe A";
		}

		elseif ($box2 >= 128 && $box2 <= 191) {
			
			echo "Classe B";
		}

		elseif ($box3 >= 192 && $box3 <= 223) {
			
			echo "Classe C";
		}

		elseif ($box3 >= 224 && $box3 <= 239) {
			
			echo "Classe D";
		}

		elseif ($box4 >= 240 && $box4 <= 254) {
			
			echo "Classe E";
		}

	
	}
	else{
        echo " Erro!";
    }
}

?>	