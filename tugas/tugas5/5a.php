<?php 
$mahasiswa = [
  
  ["nama" => "Adriana Lima",
              "nim" => "2403202446",
              "email" => "lianamama@kg.ac.id ",
              "jurusan" => "Film dan Televisi",
              "gambar" => "adri.jpg"
            ],
  ["nama" => "Devon Aoki",
              "nim" => "2403202448",
              "email" => "debs4uu@kg.ac.id",
              "jurusan" => "Sastra Inggris",
              "gambar" => "depon.jpg"
            ],
  ["nama" => "Jonnae ",
              "nim" => "2403202450",
              "email" => "jonnae@gmail.com ",
              "jurusan" => "teknologi informasi",
              "gambar" => "jonnae.jpg"
            ],
  ["nama" => "Broke Shields",
              "nim" => "2403202440",
              "email" => "brookeshie@gmail.com",
              "jurusan" => "Seni Rupa",
              "gambar" => "broke.jpg"
            ],
  ["nama" => "Paulina Porizkova",
              "nim" => "2403202441",
              "email" => "paulporizz@gmail.com",
              "jurusan" => "Manajemen Bisnis",
              "gambar" => "paul.jpg"
            ],
  ["nama" => "Blair Waldorf",
              "nim" => "2403202442",
              "email" => "corneliabw@gmail.com",
              "jurusan" => "Desain Grafis",
              "gambar" => "blair.jpg"
            ],
  ["nama" => "Ethan Lee",
              "nim" => "2403202443",
              "email" => "thanele@gmail.com",
              "jurusan" => "Psikologi",
              "gambar" => "ethan.jpg"
            ],
  ["nama" => "Jeffery Alwyn",
              "nim" => "2403202444",
              "email" => "jefferyy@gmail.com",
              "jurusan" => "akuntansi",
              "gambar" => "jepri.jpg"
            ],
  ["nama" => "Ningning Aespa",
              "nim" => "2403202445",
              "email" => "ningyizuo@gmail.com",
              "jurusan" => "Sastra China",
              "gambar" => "ningning.jpg"
            ],
  ["nama" => "Karina Aespa",
              "nim" => "2403202446",
              "email" => "katarina@gmail.com",
              "jurusan" => "Sastra Inggris",
              "gambar" => "karina.jpg"
              ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li> <img src="img/<?= $mhs["gambar"]?>"></li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>