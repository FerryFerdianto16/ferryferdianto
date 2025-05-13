<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Person</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: #f0f4f8;
            color: #333;
        }
        .contact-card {
            background: white;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 40px auto;
        }
        .contact-details {
            flex: 1;
        }
        .contact-card h2 {
            margin-top: 0;
            color: #0077cc;
            font-weight: 600;
        }
        .contact-info {
            margin: 10px 0;
        }
        .contact-info label {
            font-weight: bold;
            color: #555;
        }
        .contact-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #0077cc;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            /* padding-left:450px; */
            margin-top: 30px; /* ke bawah */
            margin-left: -10px; /* ke kiri */
            
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
       
      
    </style>
</head>
<body>
    <div class="contact-card">
        <div class="contact-details">
            <h2>Contact Person</h2>
            <div class="contact-info">
                <label>Name:</label> Ferry Ferdianto
            </div>
            <div class="contact-info">
                <label>Phone:</label> +62 --------
            </div>
            <div class="contact-info">
                <label>Email:</label> anjay@gmail.com
            </div>
            <div class="contact-info">
                <label>Alamat:</label> Gak Dibawa Berat 
            </div>
            <section id="skills" class="skills-section">
            <div class="skills">
            
                 <!-- <div class="skill">Klik Disinii</div> -->
                 <a class="skill" href="ryy.php">Klik Disini</a>
            </div>
        </section>
        </div>
        <img src="ryy.jpg" alt="Contact Photo" class="contact-photo">
    </div>
</body>
</html>
