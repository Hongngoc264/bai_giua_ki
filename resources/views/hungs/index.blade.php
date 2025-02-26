<!-- resources/views/home/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager  Book Lists</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/background.jpg') }}'); /* Chỉ định ảnh nền */
            background-size: cover; /* Đảm bảo ảnh phủ toàn bộ nền */
            background-position: center; /* Căn giữa ảnh */
            background-attachment: fixed; /* Ảnh nền không di chuyển khi cuộn trang */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-top: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Thêm bóng cho tiêu đề */
        }

        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Màu nền bán trong suốt */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 5px 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manager Book Lists</h1>
        <a href="{{ route('home.create') }}">Thêm mới</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Hung</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hungs as $hung)
                    <tr>
                        <td>{{ $hung->id }}</td>
                        <td>{{ $hung->name }}</td>
                        <td>{{ $hung->descriptions }}</td>
                        <td><img src="{{ asset('storage/' . $hung->images) }}" alt="Image" width="100"></td>
                        <td>{{ $hung->hung }}</td>
                        <td>
                            <a href="{{ route('home.edit', $hung->id) }}">Sửa</a>
                            <form action="{{ route('home.destroy', $hung->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
