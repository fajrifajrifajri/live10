<script src={{ asset('js/jquery.min.js') }}></script>
<script src={{ asset('js/bootstrap.js') }}></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(()=>{
        let base_url = `http://localhost:8000/`;
        $('.owl-carousel').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            margin:10,
            dots:false,
            nav:true,
            navText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        $('#fbuatjanji').on('submit', e =>{
            e.preventDefault();
            const data = $(this).serialize();
            // atau new FormData(this) -> tapi ini sebisa mungkin
            // buat ajax gmbr doang karena makan cache gede
            let checkinput = true;
            $('#fbuatjanji').find('input').each((idx,elem)=>{
                if($(elem).val() === ""){
                    checkinput = false;
                    //alert(`${$(elem).attr("id")} || ${$(elem).val()}`);
                }
            });
            if(checkinput) {
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: `${base_url}action-buatjanji`,
                    beforeSend: () => {
                        //ketika data ngirim
                    },
                    success: res => {
                        if (res) {
                            //ketika data SUKSES dikirim
                            alert(res);
                        } else {
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
            }else{
                alert('field harus diisi smua');
            }
        });
    });


        function Dokter1() {
            document.getElementById("dokter-1").style.display = "block";
            document.getElementById("dokter-2").style.display = "none";
        }

        function Dokter2() {
            document.getElementById("dokter-2").style.display = "block";
            document.getElementById("dokter-1").style.display = "none";
        }

</script>