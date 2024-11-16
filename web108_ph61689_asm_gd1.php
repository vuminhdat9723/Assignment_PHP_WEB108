<?php
$sinh_vien = [
    ['masv' => 'PH61689', 'name' => 'Vũ Minh Đạt', 'class' => 'WEB20202', 'email' => 'cloud.dat6868@gmail.com', 'phone' => '0333309635', 'img' => 'image/anh1.jpg', 'dtb' => '8', 'hocluc' => 'Giỏi', 'gopy' => 'Lần sau cố gắng phát huy'],
    ['masv' => 'PH12345', 'name' => 'Vũ Minh Anh', 'class' => 'WEB20203', 'email' => 'cloud.dat6969@gmail.com', 'phone' => '0343254970', 'img' => 'image/anh2.jpg', 'dtb' => '9', 'hocluc' => 'Giỏi', 'gopy' => 'Lần sau cố gắng phát huy'],
    ['masv' => 'PH678910', 'name' => 'Vũ Minh An', 'class' => 'WEB20204', 'email' => 'cloud.dat6767@gmail.com', 'phone' => '0587468542', 'img' => 'image/anh3.jpg', 'dtb' => '8', 'hocluc' => 'Giỏi', 'gopy' => 'Lần sau cố gắng phát huy']
];

$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng sinh viên học môn lập trình cơ bản PHP</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }

        .table-header {
            background: linear-gradient(to right, #36d1dc, #5b86e5);
        }
    </style>
</head>

<body class="p-10">
    <a href="form_gd1.php" class="border border-2 p-2 rounded-lg gradient-bg"><button class="font-bold text-white">Thêm sinh viên</button></a>

    <h1 class="text-4xl font-bold text-center my-10 gradient-bg text-white p-5 rounded-lg">Bảng sinh viên học môn lập trình PHP cơ bản</h1>

    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white border-collapse border border-gray-300">
            <thead class="table-header text-white uppercase text-sm leading-normal">
                <tr>
                    <th class="py-4 px-6 text-left border-r border-gray-400">STT</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Mã sinh viên</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Tên</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Lớp</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Email</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Số điện thoại</th>
                    <th class="py-4 px-6 text-center border-r border-gray-400">Hình ảnh</th>
                    <th class="py-4 px-6 text-center border-r border-gray-400">Điểm tổng kết</th>
                    <th class="py-4 px-6 text-center border-r border-gray-400">Học lực</th>
                    <th class="py-4 px-6 text-left border-r border-gray-400">Góp ý</th>
                    <th class="py-4 px-6 text-center">Chức năng</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm font-light">
                <?php foreach ($sinh_vien as $row) {
                    $i++; ?>
                    <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-200 ease-in-out">
                        <td class="py-4 px-6 border-r border-gray-300"><?= $i ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['masv'] ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['name'] ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['class'] ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['email'] ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['phone'] ?></td>
                        <td class="py-4 px-6 text-center border-r border-gray-300 flex items-center justify-center">
                            <img src="<?= $row['img'] ?>" alt="Chưa có hình" class="h-12 w-14">
                        </td>
                        <td class="py-4 px-6 text-center border-r border-gray-300"><?= $row['dtb'] ?></td>
                        <td class="py-4 px-6 text-center border-r border-gray-300"><?= $row['hocluc'] ?></td>
                        <td class="py-4 px-6 border-r border-gray-300"><?= $row['gopy'] ?></td>
                        <td class="py-4 px-6 text-center">
                            <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Sửa</a> |
                            <a href="#" class="text-red-500 hover:text-red-700 font-semibold">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
