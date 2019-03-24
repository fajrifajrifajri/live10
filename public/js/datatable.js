$(document).ready(() => {
    function numberWithCommas(n) {
        var parts = n.toString().split(".");
        return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
    }

    let base_url = window.location.origin + "/"
    let base_admin = window.location.origin + "/admin/"
    let host = window.location.host

    let monthNames = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    let dayNames = ["", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

    let tbljadwaldokter = $('#tbljadwaldokter').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        dom: 'lrtip',
        responsive: true,
        ajax: `${base_url}table/jadwal_dokter_user`,
        columns: [
            {
                "data": "nama",
                "sClass": "text-center",
            },
            {
                data: "specialist",
                sclass: "text-center"
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 1) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 2) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 3) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 4) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 5) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 6) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    if (t == 7) {
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    } else {
                        return `-`
                    }
                }
            },
        ],
        processing: true,
        language: {
            processing: '<div class="spinner-border" role="status"></div>',
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "Data Janji tidak tersedia",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: false
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 10
    });

    $('.filterdokter').click(function (e) {
        if ($(this).html() === "All") {
            tbljadwaldokter.ajax.reload();
        } else {
            tbljadwaldokter.search($(this).html()).draw();
        }
    })

    let tbljanjijadwal = $('#tbljanjijadwal').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        ajax: `${base_url}table/janji_jadwal`,
        columns: [
            {
                "data": "*",
                "sClass": "text-center",
                render: (t, e, a, b) => {
                    const jam_awal = a.jamawal.split(":")
                    const jam_akhir = a.jamakhir.split(":")
                    return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 1) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 2) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 3) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 4) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 5) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 6) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass": "text-center",
                render: (t, e, a) => {
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i, x;
                    let nama = [];
                    for (i = 0; i <= hr.length; i++) {
                        if (hr[i] == 7) {
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i].replace('Dr. ', ' ')}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },

        ],
        processing: true,
        language: {
            processing: 'Please Wait<div class="spinner-border" role="status"></div>',
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "Data Janji tidak tersedia",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok",
        },
        colReorder: {
            realtime: false
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 10
    });

    let tbljanji = $('#tbljanji').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        ajax: `${base_url}table/janji_pasien`,
        columns: [
            {
                "data": "id",
                "sClass": "text-center",
            },
            // {
            //     "data": "kode-janji",
            //     "sClass":"text-center",
            // },
            // {
            //     "data": "kode-antrian",
            //     "sClass":"text-center",
            // },
            {
                "data": "notelp",
                "sClass": "text-center",
            },
            {
                "data": "email",
                "sClass": "text-center",
            },
            {
                "data": "nama_pasien",
                "sClass": "text-center",
            },
            {
                "data": "tgllahir_pasien",
                "sClass": "text-center",
                render: data => {
                    const explode = data.split('-');
                    const tanggal = explode[2];
                    const bulan = monthNames[explode[1].replace(0, '')];
                    const tahun = explode[0]
                    return `${tanggal} ${bulan} ${tahun}`
                }
            },
            {
                "data": "nama_dokter",
                "sClass": "text-center"
            },
            {
                data: "harga",
                sClass: "text-center",
                render: data => {
                    return `Rp. ${numberWithCommas(data)}`
                }
            },
            {
                "data": "tgl_bertemu",
                "sClass": "text-center",
                render: data => {
                    const date = new Date(data);
                    const explode = data.split('-');
                    const hari = date.toLocaleDateString('id', {weekday: 'long'});
                    const tanggal = explode[2];
                    const bulan = monthNames[explode[1].replace(0, '')];
                    const tahun = explode[0]
                    return `${hari}, ${tanggal} ${bulan} ${tahun}`
                }
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": data => {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-times"></i></button>`;
                }
            }
        ],
        processing: true,
        language: {
            processing: '<div class="spinner-border" role="status"></div>',

            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "Data Janji tidak tersedia",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: false
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 10
    });
    // tbljanji.buttons().container().appendTo($('.col-sm-6:eq(0)'),tbljanji.table().container());

    let tbljadwal = $('#tbljadwal').DataTable({
        responsive: true,
        ajax: `${base_url}table/jadwal_dokter`,
        columns: [
            {
                title: "#",
                "data": "id",
                "sClass": "text-center aing-teh-macan",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: 'Nama dokter',
                "data": "nama",
                "sClass": "text-center aing-teh-macan dt dt1",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: "Specialis Dokter",
                "data": "specialist",
                "sClass": "text-center aing-teh-macan dt dt2",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: "Hari",
                "data": "hari",
                "sClass": "text-center aing-teh-macan dt dt3",
                render: (t, e, a) => {
                    return dayNames[parseInt(t)] + '<a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>';
                }
            },
            {
                title: "Jam Awal",
                "data": "jamawal",
                "sClass": "text-center aing-teh-macan dt dt4",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: "Jam Akhir",
                "data": "jamakhir",
                "sClass": "text-center aing-teh-macan dt dt5",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                "data": "id",
                width: '150px',
                "sClass": "text-center",
                "orderable": false,
                "mRender": data => {
                    $('.btn-data').tooltip();
                    return `
                    <button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="jadwal" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-pen"></i></button>
                    &nbsp;
                    <button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="jadwal" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-times"></i></button>
                    
                    `;
                }
            },
        ],
        columnDefs: [
            {
                targets: 1,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'nama_dokter');//field
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'jadwal_dokter');//namatabel
                }
            },
            {
                targets: 2,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'specialist');//field
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'dokter');//namatabel
                }
            },
            {
                targets: 3,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'hari');//field
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'jadwal_dokter');//namatabel
                }
            },
            {
                targets: 4,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'jamawal');//field
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'dokter');//namatabel
                    $(td).attr('data-table', 'dokter');//namatabel
                }
            }
        ],
        processing: true,
        language: {
            processing: '<div class="spinner-border" role="status"></div>',
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "Data Janji tidak tersedia",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: false
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 10
    });

    let tbllistdokter = $('#tbllist_dokter').DataTable({
        responsive: true,
        ajax: `${base_url}table/list_dokter`,
        columns: [
            {
                title: 'No',
                "data": "id",
                "sClass": "text-center aing-teh-macan",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: 'Nama Dokter',
                "data": "nama_dokter",
                "sClass": "text-center aing-teh-macan dt dt1",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: 'Spesialis',
                "data": "spesialis",
                "sClass": "text-center aing-teh-macan dt dt2",
                "render": function(data){
                    return data + `
                    <a href="#" class="halig-ku-aing"><i class="fas fa-pen"></i></a>
                    `;
                }
            },
            {
                title: 'Foto Dokter',
                "data": "foto",
                "sClass": "text-center aing-teh-macan dt dt3",
                "targets": 0,
                "orderable": false,
                render: (t, e, a) => {
                    return `<img width="100%" alt="dokter" src="${base_url}uploads/${t}">`
                }
            },
            {
                "data": "id",
                width: '150px',
                "sClass": "text-center",
                "orderable": false,
                "mRender": data => {
                    $('.btn-data').tooltip();
                    return `
                        <a href="${base_admin}dokter/edit/${data}"
                        class="btn btn-circle btn-primary btn-xs btn-data btn-edit" 
                        data-toggle="tooltip" data-placement="top" title="Edit Data">
                            <i class="fas fa-pen"></i>
                        </a>
                        &nbsp;
                        <button type="button" 
                        class="btn btn-circle btn-danger btn-xs btn-data btn-del" 
                        data-id=${data} data-table="list_dokter" data-toggle="tooltip" 
                        data-placement="top" title="Hapus Data">
                            <i class="fas fa-times"></i>
                        </button>`;
                }
            }
        ],
        createdRow: (row, data, dataIndex) => {
            $(row).addClass('rowss');
        },
        columnDefs: [
            {
                targets: 1,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'nama_dokter');//field
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'list_dokter');//namatabel
                }
            },
            {
                targets: 2,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'spesialis');
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'list_dokter');
                }
            },
            {
                targets: 3,
                createdCell: (td, cellData, rowData, row, col) => {
                    $(td).attr('data-row', 'foto');
                    $(td).attr('data-id', rowData.id)
                    $(td).attr('data-target', col)
                    $(td).attr('data-table', 'list_dokter');
                }
            }
        ],
        processing: true,
        language: {
            processing: '<span>Please Wait</span><div class="spinner-border" role="status"></div>',
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "Data Janji tidak tersedia",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: false
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 10
    });
    // let html;
    // $(document).on('hover','.dt',function (e) {
    //     html = $(this).html();
    //     alert(html)
    //     e.stopPropagation()
    //     $(this).append('<span class="plusadd">+</span>');
    // },function () {
    //     $(this).html(html)
    // })
    let idfile;
    $(document).on('dblclick', '.dt', function (e) {
        e.stopPropagation();
        $(this).addClass('act');
        let row = $(this).data('row'),
            id = $(this).data('id'),
            target = $(this).data('target'),
            table = $(this).data('table'),
            data = $(this).html(),
            html = '';
        switch (row) {
            case 'nama_dokter':
                html = `
                <input type="text" class="form-control a" data-table="${table}"
                        data-row="${row}" data-id="${id}" value="${data}" autofocus>
                `;
                $(this).closest('.rowss').find(`.dt${target}`).first().html(html);
                break;
            case 'spesialis':
                $.ajax({
                    type: 'GET',
                    url: `${base_url}table/specialist_dokter`,
                    success: res => {
                        // console.log(res.data[0].specialist)
                        html = `
                        <select class="form-control a" data-table="${table}"
                            data-row="${row}" data-id="${id}" autofocus>
                        `
                        for (let i = 0; i < res.data.length; i++) {
                            let obj = res.data[i],
                                selected = '';
                            if (obj.specialist === data) {
                                selected = 'selected'
                            }
                            html += `<option value="${obj.id}" ${selected}>${obj.specialist}</option>\n`
                        }
                        html += `
                            </select>
                        `
                        $(this).closest('.rowss').find(`.dt${target}`).first().html(html);
                    }
                });
                break;
            case 'foto':
                old = data;
                html = `
                    ${data}
                    <input class="inputfileajax" type="file" data-table="${table}"
                     data-row="${row}" data-id="${id}" autofocus>                
                `;
                $(this).closest('.rowss').find(`.dt${target}`).first().html(html);
                idfile = id;
                $(`input[data-id="${id}"]`).trigger('click');
                // kode upload file disini
                //
                // $(this).closest('.rowss').find(`.dt${target}`).first().html(old);
                break;
        }
        $('.a').first().focus();

    });
    $(document).on('focusout', '.dt', function (e) {
        if ($(this).find('input[type="file"]').length > 0) {

        } else {
            let table = $('table').attr('id');
            $(`#${table}`).DataTable().ajax.reload();
        }
    })
    $(document).on('change','.inputfileajax',function (e) {
        const id = $(this).data('id'),
            row = $(this).data('row'),
            table = $(this).data('table')
    })
    // let container = $('.act');
    // if (!container.is(e.target) // if the target of the click isn't the container...
    //     && container.has(e.target).length === 0) // ... nor a descendant of the container
    // {
    //
    // }
    $(document).on('keypress', '.a', function (e) {
        const val = $(this).val(),
            id = $(this).data('id'),
            row = $(this).data('row'),
            table = $(this).data('table');
        if ($(e.target).is('input') && e.which == 13) {
            $.ajax({
                type: 'POST',
                url: `${base_admin}action/update`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    val: val,
                    id: id,
                    row: row,
                    table: table
                },
                success: res => {
                    if (res) {
                        alert(res)
                    } else {
                        $('#' + table).DataTable().ajax.reload();
                    }
                },
                error: xhr => {
                    // console.log(xhr);
                    console.log(xhr.responseJSON.message);
                }
            })
        }
    })
    // $(document).on('change', `input[type="file"]`, function (e) {
    //     console.log('a')
    // });
    $(document).on('change', '.a', function (e) {
        const val = $(this).val(),
            id = $(this).data('id'),
            row = $(this).data('row'),
            table = $(this).data('table');
        if ($(e.target).is('select')) {
            $.ajax({
                type: 'POST',
                url: `${base_admin}action/update`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    val: val,
                    id: id,
                    row: row,
                    table: table
                },
                success: res => {
                    if (res) {
                        alert(res)
                    } else {
                        $('#' + table).DataTable().ajax.reload();
                    }
                },
                error: xhr => {
                    // console.log(xhr);
                    console.log(xhr.responseJSON.message);
                }
            })
        }
    })
})
    // table.buttons().container()
    //     .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );