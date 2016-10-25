<?php
				include ('konek.php');
				$kueri_ambil_data_candidates = "SELECT * FROM candidates";
				$result_ambil_data_candidates = $conn->query($kueri_ambil_data_candidates);
				
				if ($result_ambil_data_candidates->num_rows > 0) {
					while ($row = $result_ambil_data_candidates->fetch_assoc()) {
						echo '<div class="col-md-6">
							<div class="service">
								<div class="icon-holder">
									<img src="' . $row["photoaddress"] .'" alt="" class="icon" />
								</div>
								<h4 class="heading">' . $row["nama"] .'</h4><br>';
								$var_idcandidate = $row["id"];
								echo '<h6 class="heading">';
									$kueri_ambil_hasil_voting = "SELECT * FROM voting WHERE idcandidate= '$var_idcandidate' ";
									$hasil_ambil_hasil_voting = $conn->query($kueri_ambil_hasil_voting);
									$a = 0;
									if ($hasil_ambil_hasil_voting->num_rows > 0) {
										while ($row = $hasil_ambil_hasil_voting->fetch_assoc()){										
											$a += 1;
										}
									} 
									echo $a;
									echo '</h6>
							</div>
						</div>';
					} 
				} 
									

$conn->close();
?>