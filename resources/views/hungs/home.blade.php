<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Book Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007BFF;
            padding: 15px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background: url('https://source.unsplash.com/1600x400/?books,library') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .banner h1 {
            font-size: 48px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .banner p {
            font-size: 20px;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5);
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .welcome-message {
            font-size: 18px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('home') }}">Trang chủ</a>
        <a href="{{ route('trangchu') }}">Sản phẩm</a>
        <a href="{{ route('index') }}">Admin</a>
    </div>

    <div class="banner">
        <div>
            <h1>Chào mừng đến với Cửa hàng Sách</h1>
            <p>Khám phá thế giới tri thức với những cuốn sách hay nhất</p>
        </div>
    </div>

    <div class="container">
        <h2>Về Chúng Tôi</h2>
        <p class="welcome-message">Chúng tôi cung cấp những cuốn sách chất lượng, phong phú về thể loại, giúp bạn mở rộng tri thức và tận hưởng thế giới văn hóa đọc.</p>
    </div>
</body>
</html>
