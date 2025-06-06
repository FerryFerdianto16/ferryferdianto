<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bidang Keahlian</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f4f8;
      line-height: 1.6;
      color: #333;
    }

    header {
      background: linear-gradient(90deg, #0077b6, #00b4d8);
      color: white;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      margin: 0;
      font-size: 3rem;
      letter-spacing: 1px;
    }

    .intro {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
      text-align: center;
    }

    .intro p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      line-height: 1.8;
    }

    .highlight {
      color: #0077b6;
      font-weight: 600;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .card {
      background-color: white;
      border-radius: 16px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
      width: 80px;
      margin-bottom: 20px;
    }

    .card h3 {
      margin-bottom: 15px;
      color: #023e8a;
      font-size: 1.6rem;
      letter-spacing: 0.5px;
    }

    .card p {
      color: #555;
      font-size: 1.05rem;
      line-height: 1.6;
    }

    .skills {
       
  display: flex;
  justify-content: center; /* untuk posisi horizontal tengah */
  align-items: center;     /* untuk posisi vertikal (jika perlu) */
  margin-top: 30px;

        }

        .skill {
            background: #0077cc;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background 0.3s ease;
            cursor: default;
            text-decoration : none;
        }

        .closing {
  background-color: #e0f7fa;
  padding: 50px 20px;
  margin-top: 40px;
  text-align: center;
  border-top: 2px solid #00b4d8;
}

.closing-content h2 {
  color: #0077b6;
  font-size: 2rem;
  margin-bottom: 20px;
}

.closing-content p {
  font-size: 1.2rem;
  color: #333;
  max-width: 800px;
  margin: auto;
  line-height: 1.8;
}

  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <h1>Bidang Keahlian Saya</h1>
  </header>

  <div class="intro">
    <p>Halo! Saya adalah seorang <span class="highlight">profesional multitalenta</span> yang menguasai berbagai bidang penting. Dengan pengalaman luas dan dedikasi penuh, saya terus mengembangkan keterampilan saya untuk memberikan hasil yang terbaik.</p>
    <p>Berikut ini adalah <span class="highlight">bidang-bidang keahlian</span> yang saya tekuni dan banggakan.</p>
  </div>

  <div class="container">
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/854/854894.png" alt="Olahraga">
      <h3>Olahraga</h3>
      <p>Saya ahli dalam berbagai cabang olahraga seperti sepak bola, basket, dan renang, baik sebagai pelatih maupun praktisi.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/2942/2942842.png" alt="Pendidikan">
      <h3>Pendidikan</h3>
      <p>Saya berpengalaman dalam pengajaran, pelatihan, serta pengembangan kurikulum pendidikan formal dan nonformal.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/3468/3468083.png" alt="Seni">
      <h3>Seni</h3>
      <p>Saya mengekspresikan kreativitas melalui seni rupa, musik, tari, dan teater untuk melestarikan budaya.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" alt="Teknologi">
      <h3>Teknologi</h3>
      <p>Saya menguasai komputer, software development, hardware, serta inovasi digital yang terus berkembang.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Kesehatan">
      <h3>Kesehatan</h3>
      <p>Saya berkompeten dalam bidang kesehatan, kebugaran, nutrisi, dan pelayanan yang meningkatkan kualitas hidup.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/706/706830.png" alt="Kuliner">
      <h3>Kuliner</h3>
      <p>Saya menciptakan resep inovatif, mengelola bisnis kuliner, dan menghadirkan pengalaman rasa yang istimewa.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Manajemen">
      <h3>Manajemen</h3>
      <p>Saya menguasai manajemen sumber daya, organisasi, perencanaan strategis, dan pengembangan bisnis.</p>
    </div>

    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/3408/3408543.png" alt="Pertanian">
      <h3>Pertanian</h3>
      <p>Saya berpengetahuan luas dalam bercocok tanam, agribisnis modern, dan pengelolaan hasil pertanian.</p>
    </div>
  </div>
</body>
</html>
<section id="skills" class="skills-section">
            <div class="skills">
            
                 <!-- <div class="skill">Klik Disinii</div> -->
                 <a class="skill" href="ryy.php">Klik Disini Untuk Kembali Ke Beranda</a>
            </div>
        </section>

        <section class="closing">
  <div class="closing-content">
    <h2>Terus Berkembang Bersama Saya!</h2>
    <p>Saya percaya bahwa keahlian adalah investasi terbaik untuk masa depan. Dengan semangat belajar tanpa henti, saya terus memperluas wawasan dan keterampilan untuk memberikan yang terbaik dalam setiap bidang. 
    Mari kita wujudkan impian dan kesuksesan bersama!</p>
  </div>
</section>
