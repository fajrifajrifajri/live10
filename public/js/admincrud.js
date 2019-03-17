$(document).ready(function () {
    const base_url = window.location.origin+"/"
    const base_admin = window.location.origin+'/admin/'
    $('form').submit(function (e) {
        e.preventDefault();
        const data = new FormData(this);
        const action = $(this).data('action');
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
                    location.href = `${base_admin}action/${action}`
                }
            }
        })
    })
    $(document).on('click','.btn-del',function () {
        const id = $(this).data("id")
        const table = $(this).data("table")
        $.ajax({
            type:'POST',
            url:`${base_admin}${table}`,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                id:id
            },
            success: res =>{
                // alert(res);
                $(`#tbl${table}`).DataTable().ajax.reload();
            }
        })
    })
})