<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ferry Ferdianto</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #0077cc;
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-weight: 600;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffcc00;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        section {
            margin-bottom: 50px;
        }

        h2 {
            font-weight: 600;
            font-size: 2rem;
            margin-bottom: 20px;
            border-bottom: 3px solid #0077cc;
            display: inline-block;
            padding-bottom: 5px;
            margin-top:-50px;
        }

        .about p {
            font-size: 1.2rem;
            max-width: 700px;
            margin-top:-50px;
        }
        .about-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 30px;
}

.about-text {
    flex: 1;
    min-width: 250px;
}

.about-image {
    flex: 1;
    min-width: 250px;
    text-align: center;
}

.about-image img {
    width: 300px; /* Ukuran kotak (boleh kamu ganti 250px atau 200px) */
    height: 300px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin-top: -20px
}


        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
           
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

        .skill:hover {
            background: #005fa3;
        }

        

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .project-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .project-content {
            padding: 15px 20px;
        }

        .project-title {
            font-weight: 600;
            font-size: 1.3rem;
            margin: 0 0 10px 0;
        }

        .project-description {
            font-size: 1rem;
            color: #555;
        }

        footer {
            background: #0077cc;
            color: white;
            text-align: center;
            padding: 20px 10px;
            font-size: 0.9rem;
            box-shadow: 0 -4px 8px rgba(0,0,0,0.1);
        }

        /* Button style */
        .btn-contact {
            display: inline-block;
            background: #ffcc00;
            color: #333;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(255,204,0,0.5);
            transition: background 0.3s ease;
            margin-top: 15px;
        }

        .btn-contact:hover {
            background: #e6b800;
        }

        .gambar {
            
        }
    </style>
</head>
<body>
    <header>
        <h1>Portofolio Saya</h1>
        <nav>
            <a href="#about">Tentang Saya</a>
            <a href="#skills">Keahlian</a>
            <a href="#projects">Proyek</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>
    <main>
    <section id="about" class="about">
    <h2>Tentang Saya</h2>
    <div class="about-container">
        <div class="about-text">
            <p>Halo! Saya adalah Ferry Ferdianto seorang pengembang web yang bersemangat dengan pengalaman dalam membuat website yang menarik dan fungsional. Saya suka belajar teknologi baru dan selalu berusaha memberikan hasil terbaik dalam setiap proyek.</p>
        </div>
        <div class="about-image">
            <img src="IMG-20250403-WA0024.jpg" alt="Tentang Saya">
        </div>
    </div>
</section>
<section id="skills" class="skills-section">
    <h2>Keahlian</h2>
    <p style="font-size: 1.1rem; margin-bottom: 25px; color: #555;">
        Berikut adalah salah satu bidang keahlian saya yang terus saya kembangkan seiring dengan pengalaman dan pembelajaran berkelanjutan.
    </p>
  
    <div class="projects">
        <div class="project-card">
            <img src="Flower, sun, beauty😍.jpeg" alt="Keahlian" class="project-image" />
            <div class="project-content">
                <h3 class="project-title">Beberapa Bidang Keahlian Saya</h3>
                <p class="project-description">Saya Adalah Seorang Yang Lumayan Ahli Dalam Bidang Apapun, Mulai Dari Pendidikan, Olahraga, Dan Pertanian.</p>
            </div>
        </div>
    </div>
    <div class="skills" style="margin-top: 30px;">
        <a class="skill" href="fer.php">Klik Disini Untuk Beralih Ke Bagian Bidang Keahlian</a>
    </div>
   
</section>




        <section id="projects" class="projects-section">
            <h2>Proyek</h2>
            <div class="projects">
                <div class="project-card">
                    <img src="Flower, sun, beauty😍.jpeg" alt="Proyek 1" class="project-image" />
                    <div class="project-content">
                        <h3 class="project-title">Website Toko Online</h3>
                        <p class="project-description">Sebuah website e-commerce yang responsif dan mudah digunakan untuk berbelanja online.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="Wallpaper Bunga Senja!.jpeg" alt="Proyek 2" class="project-image" />
                    <div class="project-content">
                        <h3 class="project-title">Aplikasi Manajemen Tugas</h3>
                        <p class="project-description">Aplikasi web untuk mengelola dan mengatur tugas harian dengan fitur notifikasi.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="Wallpaper Bunga Senja!.jpeg" alt="Proyek 3" class="project-image" />
                    <div class="project-content">
                        <h3 class="project-title">Blog Pribadi</h3>
                        <p class="project-description">Blog dengan desain minimalis untuk berbagi artikel dan pengalaman pribadi.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact-section">
            <h2>Kontak</h2>
            <p>Jika Anda tertarik bekerja sama atau ingin menghubungi saya, silakan klik tombol di bawah ini.</p>
            <a href="hubungi.php" class="btn-contact">Hubungi Saya</a>
        </section>
    </main>
    <footer>
        &copy; 2024 Portofolio Saya. Semua hak cipta dilindungi.
    </footer>
</body>
</html>
