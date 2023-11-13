<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        output {
            display: block;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" required>

        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" required>

        <label for="pekerjaan">Pekerjaan</label>
        <select name="pekerjaan" required>
            <option value="programmer">Programmer</option>
            <option value="designer">Designer</option>
            <option value="manager">Manager</option>
        </select>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur berdasarkan tanggal lahir
        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        // Tentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch ($pekerjaan) {
            case 'programmer':
                $gaji = 15000000;
                break;
            case 'designer':
                $gaji = 10000000;
                break;
            case 'manager':
                $gaji = 9000000;
                break;
        }

        // Tampilkan output
        echo "<output>Halo, $nama! Umur Anda adalah $umur tahun. Gaji Anda sebagai $pekerjaan adalah Rp $gaji.</output>";
    }
    ?>
</body>
</html>
