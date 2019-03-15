$(document).ready(function () {
    let base_url = window.location.origin+"/"
    $('form').submit(function (e) {
        e.preventDefault();
        let data = new FormData(this);
        let action = $(this).data('action');
        $.ajax({
            type:'POST',
            data:data,
            url:`${base_url}/admin/action/${action}`,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            success: res=>{
                if(res){
                    alert(res)
                }else{
                    location.href = `${base_url}admin/${action}`
                }
            }
        })
    })
})