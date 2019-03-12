$(document).ready(() => {
    function numberWithCommas(n) {
        var parts = n.toString().split(".");
        return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
    }
    let base_url = window.location.origin+"/"
    let base_admin = window.location.origin+"/admin/"
    let host = window.location.host

    let monthNames = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember" ];

    let tbljadwaldokter = $('#tbljadwaldokter').DataTable( {
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        dom: 'lrtip',
        responsive: true,
        ajax: `${base_url}table/jadwal_dokter`,
        columns: [
            {
                "data": "nama",
                "sClass":"text-center",
            },
            {
                data: "specialist",
                sclass: "text-center"
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 1){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 2){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 3){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 4){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 5){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 6){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render: (t,e,a) =>{
                    if(t == 7){
                        const jam_awal = a.jamawal.split(":")
                        const jam_akhir = a.jamakhir.split(":")
                        return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                    }else{
                        return `-`
                    }
                }
            },
        ],
        language: {
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
        buttons:[
            { extend: 'print', className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info' },
            { extend: 'copyHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent' },
            { extend: 'excelHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning' },
            { extend: 'csvHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger' },
            { extend: 'pdfHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent' }
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
    } );
    
    $('.filterdokter').click(function (e) {
        if($(this).html() === "All"){
            tbljadwaldokter.ajax.reload();
        }else {
            tbljadwaldokter.search($(this).html()).draw();
        }
    })

    let tbljanjijadwal = $('#tbljanjijadwal').DataTable( {
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        ajax: `${base_url}table/janji_jadwal`,
        columns: [
            {
                "data": "*",
                "sClass":"text-center",
                render:(t,e,a,b)=>{
                    const jam_awal = a.jamawal.split(":")
                    const jam_akhir = a.jamakhir.split(":")
                    return `${jam_awal[0]}:${jam_akhir[1]} - ${jam_akhir[0]}:${jam_akhir[1]}`
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 1){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 2){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 3){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 4){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 5){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 6){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },
            {
                "data": "hari",
                "sClass":"text-center",
                render:(t,e,a)=>{
                    let exp = a.nama_dokter.split(",");
                    let hr = a.hari.split(",");
                    let i,x;
                    let nama = [];
                    for(i = 0;i <= hr.length;i++){
                        if(hr[i] == 7){
                            nama.push(`<a href="${base_url}buat-janji-form/${exp[i]}">${(exp[i])}</a><br>`);
                        }
                    }
                    return nama.join();
                }
            },

        ],
        language: {
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
        buttons:[
            { extend: 'print', className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info' },
            { extend: 'copyHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent' },
            { extend: 'excelHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning' },
            { extend: 'csvHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger' },
            { extend: 'pdfHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent' }
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
    } );

    let tbljanji = $('#tbljanji').DataTable( {
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        ajax: `${base_url}table/janji_pasien`,
        columns: [
            {
                "data": "id",
                "sClass":"text-center",
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
                "sClass":"text-center",
            },
            {
                "data": "email",
                "sClass":"text-center",
            },
            {
                "data": "nama_pasien",
                "sClass":"text-center",
            },
            {
                "data": "tgllahir_pasien",
                "sClass":"text-center",
                render: data =>{
                    const explode = data.split('-');
                    const tanggal = explode[2];
                    const bulan = monthNames[explode[1].replace(0,'')];
                    const tahun = explode[0]
                    return `${tanggal} ${bulan} ${tahun}`
                }
            },
            {
                "data": "nama_dokter",
                "sClass":"text-center"
            },
            {
                data: "harga",
                sClass: "text-center",
                render: data=>{
                    return `Rp. ${numberWithCommas(data)}`
                }
            },
            {
                "data": "tgl_bertemu",
                "sClass":"text-center",
                render: data=>{
                    const date = new Date(data);
                    const explode = data.split('-');
                    const hari = date.toLocaleDateString('id',{weekday:'long'});
                    const tanggal = explode[2];
                    const bulan = monthNames[explode[1].replace(0,'')];
                    const tahun = explode[0]
                    return `${hari}, ${tanggal} ${bulan} ${tahun}`
                }
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": function (data) {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-times"></i></button>`;
                }
            }
        ],
        language: {
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
        buttons:[
            { extend: 'print', className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info' },
            { extend: 'copyHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent' },
            { extend: 'excelHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning' },
            { extend: 'csvHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger' },
            { extend: 'pdfHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent' }
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
    } );
    // tbljanji.buttons().container().appendTo($('.col-sm-6:eq(0)'),tbljanji.table().container());

    let tbljadwal = $('#tbljadwal').DataTable( {
        responsive: true,
        ajax: `${base_url}table/jadwal_dokter`,
        columns: [
            {
                "data": "id",
                "sClass":"text-center",
            },
            {
                "data": "hari",
                "sClass":"text-center",
            },
            {
                "data": "jam",
                "sClass":"text-center",
            },
            {
                "data": "nama_dokter",
                "sClass":"text-center",
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": function (data) {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-pen"></i></button>`;
                }
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": function (data) {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-times"></i></button>`;
                }
            }
        ],
        language: {
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
        buttons:[
            { extend: 'print', className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info' },
            { extend: 'copyHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent' },
            { extend: 'excelHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning' },
            { extend: 'csvHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger' },
            { extend: 'pdfHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent' }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 10
    } );

    let tbldokter = $('#tbldokter').DataTable( {
        responsive: true,
        ajax: `${base_url}table/list_dokter`,
        columns: [
            {
                "data": "id",
                "sClass":"text-center",
            },
            {
                "data": "nama_dokter",
                "sClass":"text-center",
            },
            {
                "data": "spesialis",
                "sClass":"text-center",
            },
            {
                "data": "foto",
                "sClass":"text-center",
                "targets": 0,
                "orderable": false,
                render: function(data) {
                    return '<img src="'+data+'">'
                }
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": function (data) {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-pen"></i></button>`;
                }
            },
            {
                "data": "id",
                "sClass": "text-center",
                "orderable": false,
                "mRender": function (data) {
                    $('.btn-data').tooltip();
                    return `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del" data-id=${data} data-table="janji_pasien" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-times"></i></button>`;
                }
            }
        ],
        language: {
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
        buttons:[
            { extend: 'print', className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info' },
            { extend: 'copyHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent' },
            { extend: 'excelHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning' },
            { extend: 'csvHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger' },
            { extend: 'pdfHtml5', className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent' }
        ],
        "order": [
            [0, 'asc']
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 10
    } );
    })