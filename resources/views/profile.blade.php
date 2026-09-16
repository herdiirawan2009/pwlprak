<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 2px solid #888;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 35px;
            background-color: #fff;
        }

        /* SVG Avatar Icon */
        .avatar svg {
            width: 100px;
            height: 100px;
            fill: #d0d0d0;
        }

        .info-box {
            width: 100%;
            background-color: #e0e0e0;
            padding: 12px 0;
            margin-bottom: 15px;
            text-align: center;
            font-size: 18px;
            color: #111;
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <!-- Circular Avatar Placeholder -->
        <div class="avatar">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <!-- Dynamic Data Boxes -->
        <div class="info-box">
            {{ $nama }}
        </div>

        <div class="info-box">
            Kelas {{ $kelas }}
        </div>

        <div class="info-box">
            {{ $npm }}
        </div>
    </div>

</body>
</html>