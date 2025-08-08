<link href="../assets/tables/datatables.min.css" rel="stylesheet">

<table class="table table-striped table-hover table-bordered" id="tableuser">
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

<script src="../assets/tables/datatables.min.js"></script>

<!-- Datatables initialization 
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableuser').DataTable({
            dom: 'Bflrtip',
            buttons: [{ // Boton para imprimir un Excel
                    extend: 'excelHtml5',
                    footer: true,
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    text: '<i class="bi bi-file-excel"></i>',
                    exporOptions: {
                        columns: [0, 1, 2]
                    }
                },
                { // Boton para imprimir un PDF
                    extend: 'pdfHtml5',
                    footer: true,
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    text: '<i class="bi bi-filetype-pdf"></i>',
                    exporOptions: {
                        columns: [0, 1, 2]
                    }
                },
            ],
            responsive: true,
            language: {
                url: '../assets/datatables/es-ES.json'
            },
        });
    });
</script>-->
<script>
    let table = new DataTable('#tableuser', {
        responsive: true,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
        },
        sDom: 'BflrtiTp',
        buttons: [{
                        extend: 'excel',
                        footer: true,
                        title: 'Reporte de Usuarios',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success',
                        text: '<i class="bi bi-file-excel"></i>',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                {
                        extend: 'pdfHtml5',
                        messageTop: 'PDF created by PDFMake with Buttons for DataTables CACJX.',
                        titleAttr: 'Exportar a PDF',
                        title: 'Reporte de Usuarios',
                        className: 'btn btn-danger',
                        /*customize: function(doc) {
                            doc.content.splice(1, 0, {
                                columns: [{
                                    margin: 12,
                                    alignment: 'left',
                                   // image: 'image en base 64',
                                    width: 50,
                                    height: 50
                                }, {
                                    margin: [10, 15],
                                    text: 'Esto puede contener informacion del usuario',
                                    fontSize: 15
                                }]
                            });
                        },*/
                        text: '<i class="bi bi-filetype-pdf"></i>',
                        download: 'open',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }
                ],

        /*layout: {
            topStart: {
                buttons: [{
                        extend: 'excel',
                        footer: true,
                        title: 'Reporte de Usuarios',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success',
                        text: '<i class="bi bi-file-excel"></i>',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        messageTop: 'PDF created by PDFMake with Buttons for DataTables CACJX.',
                        titleAttr: 'Exportar a PDF',
                        title: 'Reporte de Usuarios',
                        className: 'btn btn-danger',
                        customize: function(doc) {
                            doc.content.splice(1, 0, {
                                columns: [{
                                    margin: 12,
                                    alignment: 'left',
                                   // image: 'image en base 64',
                                    width: 50,
                                    height: 50
                                }, {
                                    margin: [10, 15],
                                    text: 'Esto puede contener informacion del usuario',
                                    fontSize: 15
                                }]
                            });
                        },
                        text: '<i class="bi bi-filetype-pdf"></i>',
                        download: 'open',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }
                ],
            }
        },*/
    });


    /* 
        $(document).ready(function() {
            $('#tableuser').DataTable({
                responsive: true,
                language: {
                    search: "Buscar:",
                    lengthMenu: "Mostrar _MENU_ registros",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    infoEmpty: "No hay registros disponibles",
                    infoFiltered: "(filtrado de _MAX_ registros totales)",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                },
                dom: 'Bflrtip',
                layout: {
                    topStart: {
                        buttons: [{
                                extend: 'excel',
                                footer: true,
                                titleAttr: 'Exportar a Excel',
                                className: 'btn btn-success',
                                text: '<i class="bi bi-file-excel"></i>',
                                exportOptions: {
                                    modifier: {
                                        page: 'current'
                                    }
                                }
                            },
                            {
                                extend: 'pdf',
                                titleAttr: 'Exportar a PDF',
                                className: 'btn btn-danger',
                                text: '<i class="bi bi-filetype-pdf"></i>',
                                exportOptions: {
                                    modifier: {
                                        page: 'current'
                                    }
                                }
                            }
                        ],
                    }
                },
            });
        });

        */
</script>