<table border="1" width="100%">
    <tr>
        <td>kd_makanan</td>
        <td>nama_makanan</td>
        <td>jenis_makanan</td>
        <td>harga</td>
        <td>pembuat_makanan</td>
    </tr>
    <?php
        $con=mysqli_connect("localhost","root","","basrengsiboseng");

        $sql = mysqli_query($con, "select * from tb_menu");
        $no = 0;
        while($data = mysqli_fetch_array($sql)){
        $no++;
    ?>
    <tr>
        <td><?php echo $data['kd_makanan']; ?></td>
        <td><?php echo $data['nama_makanan']; ?></td>
        <td><?php echo $data['jenis_makanan']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['pembuat_makanan']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>