<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thông Tin Sinh Viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h3>tesst</h3>
        <h2 class="text-2xl font-bold mb-6 text-center">Form Thêm Sinh Viên</h2>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="student-id" class="block font-medium mb-1">Mã Sinh Viên:</label>
                <input type="text" id="student-id" name="student-id" required class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="class" class="block font-medium mb-1">Tên Lớp:</label>
                <input type="text" id="class" name="class" required class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="email" class="block font-medium mb-1">Email:</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="phone" class="block font-medium mb-1">Số Điện Thoại:</label>
                <input type="tel" id="phone" name="phone" required class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="image" class="block font-medium mb-1">Hình Ảnh:</label>
                <input type="file" id="image" name="image" accept="image/*" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="final-grade" class="block font-medium mb-1">Điểm Tổng Kết:</label>
                <input type="number" id="final-grade" name="final-grade" step="0.01" min="0" max="10" required class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label for="academic-performance" class="block font-medium mb-1">Học Lực:</label>
                <select id="academic-performance" name="academic-performance" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="">--Chọn học lực--</option>
                    <option value="Xuất sắc">Xuất sắc</option>
                    <option value="Giỏi">Giỏi</option>
                    <option value="Khá">Khá</option>
                    <option value="Trung bình">Trung bình</option>
                    <option value="Yếu">Yếu</option>
                </select>
            </div>

            <div>
                <label for="feedback" class="block font-medium mb-1">Góp Ý:</label>
                <textarea id="feedback" name="feedback" rows="4" class="w-full p-2 border border-gray-300 rounded-lg"></textarea>
            </div>

            <div class="text-center">
                <input type="submit" value="Thêm" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
