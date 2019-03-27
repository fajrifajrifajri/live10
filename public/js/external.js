$(document).ready(() => {
    let base_url = window.location.origin + "/";
    let base_admin = window.location.origin + "/admin/";
    let host = window.location.host;
    $('img').prop('draggable',false)
    $('#spesialis').select2({
        placeholder: " - Pilih Specalist - "
    });
    $('#hari').select2({
        placeholder: " - Pilih Hari - "
    });
    $('#specialist_dokter').select2({
        placeholder: " - Pilih Specialist Dokter - "
    })
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 10,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('#fbuatjanji').on('submit', function (e) {
        e.preventDefault();
        const data = $(this).serialize();
        // atau new FormData(this) -> tapi ini sebisa mungkin
        // buat ajax gmbr doang karena makan cache gede
        let checkinput = true;
        $(this).find('input').each((idx, elem) => {
            if ($(elem).val() === "") {
                checkinput = false;
                //alert(`${$(elem).attr("id")} || ${$(elem).val()}`);
            }
        });
        if (checkinput) {
            $.ajax({
                type: 'POST',
                data: data,
                url: `${base_url}action-buatjanji`,
                beforeSend: () => {
                    //ketika data ngirim
                },
                success: res => {
                    if (res) {
                        alert(res);
                    } else {
                        //ketika data SUKSES dikirim
                        alert('data masuk');
                    }
                },
                error: xhr => {
                    console.log(xhr);
                },
                complete: () => {
                    // ketika data SELESAI dikrim
                    // gk gmn penting buat backend tp mungkin
                    // berguna buat design
                }
            })
        } else {
            alert('field harus diisi smua');
        }
    });
    $('#floginadmin').on('submit', e => {
        e.preventDefault();
        let data = $('#floginadmin').serialize();
        if ($('#username').val() && $('#password').val()) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/adminlogin',
                data: data,
                beforeSend: () => {

                },
                success: res => {
                    if (res) {
                        alert(res)
                    } else {
                        location.href = `${base_url}admin/dashboard`
                    }
                },
                error: xhr => {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Username atau password yang dimasukkan salah!'
                    });
                    // console.log(xhr);
                    console.log(xhr.responseJSON.message);
                }
            })
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Tolong isi semua form terlebih dahulu!'
            })
        }
    });
    $('.btn-dokter').on('click', function () {
        const data = $(this).data('dokter');
            if (data === "all") {
                $('#asd').hide(600, function(){
                    $('.dokter').show()
            });
            } else {
                $('#asd').hide(600, function(){
                    $('.dokter').hide()
                });
                $(`#asd`).show(600, function(){
                    $(`.dokter${data}`).show()
                });
            }
        });
    let btns = document.getElementsByClassName( 'btn-data' );
    for ( let btn of btns ) {
        btn.onclick = function() {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Tolong isi semua form terlebih dahulu!'
            })
        }
    }
});