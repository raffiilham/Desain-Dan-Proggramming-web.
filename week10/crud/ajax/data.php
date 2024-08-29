<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('koneksi.php');
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();

        if($res1->num_rows > 0){
            while($row = $res1->fetch_assoc()){
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? "Laki-laki" : "Perempuan";
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
                
                echo "<tr>
                        <td>$no</td>
                        <td>$nama</td>
                        <td>$jenis_kelamin</td>
                        <td>$alamat</td>
                        <td>$no_telp</td>
                        <td>
                            <button id='$id' class='btn btn-success btn-sm edit_data'><i class='fa fa-edit'>Edit</i></button>
                            <button id='$id' class='btn btn-danger btn-sm hapus_data'><i class='fa fa-trash'>Delete</i></button>
                        </td>
                    </tr>";
                $no++;
            }
        } else {
            echo "<tr>
                    <td colspan='7'>Tidak ada data ditemukan</td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
