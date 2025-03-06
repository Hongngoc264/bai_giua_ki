<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Book Lists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
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

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .btn-add {
            display: inline-block;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: 0.3s;
        }
        .btn-add:hover {
            background-color: #45a049;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .product-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s;
        }
        .product-item:hover {
            transform: scale(1.05);
        }
        
        .product-item img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-description {
            font-size: 14px;
            color: #666;
        }

        .product-actions {
            margin-top: 10px;
        }
        .btn-edit, .btn-delete {
            padding: 6px 12px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-edit {
            background-color: #f0ad4e;
        }
        .btn-edit:hover {
            background-color: #ec971f;
        }
        .btn-delete {
            background-color: #d9534f;
        }
        .btn-delete:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('trangchu') }}">Trang chủ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Liên hệ</a>
    </div>
    

    <div class="container">
        <h1>Manager Book Lists</h1>
        <a href="{{ route('home.create') }}" class="btn-add"><i class="fa fa-plus"></i> Thêm mới</a>
        <div class="product-grid">
            @foreach ($hungs as $hung)
                <div class="product-item">
                    <img src="{{ asset($hung->images) }}" alt="Image">
                    <div class="product-name">{{ $hung->name }}</div>
                    <div class="product-description">{{ $hung->descriptions }}</div>
                    <div class="product-actions">
                        <a href="{{ route('home.edit', $hung->id) }}" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a>
                        <form action="{{ route('home.destroy', $hung->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete"><i class="fa fa-trash"></i> Xóa</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
