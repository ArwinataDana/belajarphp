<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Sederhana</title>
    <style>
        /* Reset dan gaya dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 1.6em;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.3);
        }

        input[type="submit"] {
            background: #667eea;
            color: white;
            font-weight: 600;
            cursor: pointer;
            border: none;
            font-size: 16px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background: #5a67d8;
        }

        /* Responsif */
        @media (max-width: 480px) {
            .form-container {
                padding: 30px 20px;
            }
            h2 {
                font-size: 1.4em;
            }
            input[type="submit"] {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Form Data Diri</h2>
        <form action="proses_get.php" method="GET">
            <div class="form-group">
                <label for="name">Nama Lengkap :</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" />
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi :</label>
                <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika" />
            </div>

            <input type="submit" value="Kirim Data" />
        </form>

        <h2 style="margin-top: 30px; text-align: center; color: #555;">Login</h2>
        <form action="proses_post.php" method="POST">
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" />
            </div>

            <div class="form-group">
                <label for="pass">Password :</label>
                <input type="password" id="pass" name="pass" placeholder="Masukkan password" />
            </div>

            <input type="submit" value="Masuk" />
        </form>
    </div>

</body>
</html>
