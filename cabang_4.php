<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<?php
			$tujuan = "Malang";
			
			echo "Mau main kemana? " . $tujuan . "<br>";
			echo "<br> Pesan: ";
			
			Switch($tujuan){
				case "Batu":
					echo "<br>Jangan lupa bawa jaket</b>";
					break;
				case "Bandung":
					echo "<br>Awas kalau belanja laper mata</b>";
					break;
				case "Bali":
					echo "<br>Pakai sunblock SPF 50</b>";
					break;
				default:
					echo "Ya udah belajar aja</b>";
			}
		?>
	</body>
</html>