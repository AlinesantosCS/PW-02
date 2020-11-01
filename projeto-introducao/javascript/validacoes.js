$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroUser"){
                    Swal.fire ({
                        title: "Erro ao preencer campos!",
                        text: 'Campo Usuário ou Email vazio',
                        icon: 'error',
                        confirmButton: 'Legal, vou refazer'
                    });
                }

                if(data == "ErroPass"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                       onOpen: (Toast) => {
                           toast.addEventListener('mouseenter', Swal.stopTimer)
                           toast.addEventListener('mouseleave', Swal.resumeTimer)
                       }
                   });

                   Toast.fire({
                    icon: 'error',
                    title: 'Campo senha obrigatório'
                   });
                }
            
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora