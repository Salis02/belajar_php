<?php 

require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM karyawan
            WHERE
            nama LIKE '%$keyword%' OR
            jabatan LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            hobi LIKE '%$keyword%'";
$karyawan = query($query);
?>
<table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Id</td> 
                        <td>Nama</td> 
                        <td>Jabatan</td> 
                        <td>Email</td> 
                        <td>Hobi</td>
                        <td>Gambar</td> 
                        <td>Aksi</td>
                    </tr> 
                </thead> 
                <tbody>
                <?php $i=1; ?>
                <?php foreach ($karyawan as $row): ?>
                    <tr>
                        <td><?= $i;?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jabatan"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["hobi"]; ?></td>
                        <td><img src=".img/<?= $row["gambar"]; ?>"></td>
                        <td>
                            <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++;?>
                <?php endforeach;?>
                </tbody>
            </table>