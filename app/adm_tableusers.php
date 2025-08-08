<link rel="stylesheet" href="../assets/datatables/datatables.min.css">

<table class="table table-dark table-striped table-hover table-bordered" id="tableuser">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = $conn->prepare('SELECT fname, lname, email, rol FROM user');
        $data->execute();
        //while($row = $data->fetch(PDO::FETCH_ASSOC)){ }

        foreach ($data as $row) {
        ?>
            <tr>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['rol']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script src="../assets/datatables/datatables.min.js"></script>

<script>
    let table = new DataTable('#tableuser',{
        responsive: true,
        language: {
            url: '../assets/datatables/es-ES.json'
        },
        sDom: 'BflrtiTp',
    });
</script>