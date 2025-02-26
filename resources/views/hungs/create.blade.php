<!-- resources/views/home/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm mới mục</h1>
        <form action="{{ route('home.store') }}" method="POST">
            @csrf

            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="descriptions">Mô tả:</label>
            <input type="text" id="descriptions" name="descriptions" required>

            <label for="images">Hình ảnh:</label>
            <input type="text" id="images" name="images" required>

            <label for="hung">Ngoc:</label>
            <input type="text" id="hung" name="hung" required>

            <button type="submit">Lưu</button>
        </form>

        <a href="{{ route('home.index') }}" class="back-link">Quay lại danh sách</a>
    </div>
</body>
</html>
