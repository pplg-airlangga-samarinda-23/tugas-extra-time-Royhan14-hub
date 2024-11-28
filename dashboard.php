<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$inventoryItems = [
    ['no' => 1, 'nama_barang' => 'Laptop', 'pengadaan' => '2023-01-15', 'stok' => 10, 'status' => 'Baik', 'baik' => 8, 'rusak' => 2],
    ['no' => 2, 'nama_barang' => 'Printer', 'pengadaan' => '2023-02-20', 'stok' => 5, 'status' => 'Baik', 'baik' => 5, 'rusak' => 0],
    ['no' => 3, 'nama_barang' => 'Proyektor', 'pengadaan' => '2023-03-10', 'stok' => 3, 'status' => 'Rusak', 'baik' => 0, 'rusak' => 3],
  
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventaris</title>
    <link rel="stylesheet" href="cihuy.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header"></div>
        <button class="sidebar-btn">Dashboard</button>
        <button class="sidebar-btn">Master<br> Barang</button>
        <button class="sidebar-btn">Receiving</button>
        <button class="sidebar-btn">Issuing</button>
        <button class="sidebar-btn">Logout</button>
    </div>

    <div class="content">
        <h1>Dashboard Inventaris</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Pengadaan</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Baik</th>
                    <th>Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventoryItems as $item): ?>
                    <tr>
                        <td><?php echo $item['no']; ?></td>
                        <td><?php echo $item['nama_barang']; ?></td>
                        <td><?php echo $item['pengadaan']; ?></td>
                        <td><?php echo $item['stok']; ?></td>
                        <td><?php echo $item['status']; ?></td>
                        <td><?php echo $item['baik']; ?></td>
                        <td><?php echo $item['rusak']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>