$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: "../controller/validarLogin.php",
            type: "POST",
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
                        confirmButtonText: 'Vou refazer'
                    });
                }

                
                if(data == "ErroPass"){
                    Swal.fire ({
                        title: "Erro ao preencer campos!",
                        text: 'Campo senha vazio',
                        icon: 'error',
                        confirmButtonText: 'Vou refazer'
                    });
                }


                // if(data == "ErroPass"){
                //     const Toast = Swal.mixin({
                //         toast: true,
                //         position: 'top-end',
                //         showConfirmButton: false,
                //         timer: 3000,
                //         timerProgressBar: true,
                //        onOpen: (Toast) => {
                //            toast.addEventListener('mouseenter', Swal.stopTimer)
                //            toast.addEventListener('mouseleave', Swal.resumeTimer)
                //        }
                //    });

                //    Toast.fire({
                //     icon: 'error',
                //     title: 'Campo senha obrigatório'
                //    });
                // }

                if (data == "SucessoFuncionario"){
                    swal.fire({
                        title: "Conta encontrada com sucesso!",
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if(result.value){
                            window.location.replace('../view/funcionario/funcionario.php');
                        }
                    })
                }
               

                
                if (data == "SucessoCliente"){
                    swal.fire({
                        title: "Conta encontrada com sucesso!",
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if(result.value){
                            window.location.replace('../view/cliente/cliente.php');
                        }
                    })
                }

                if (data == "SucessoADM"){
                    swal.fire({
                        title: "Conta encontrada com sucesso!",
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if(result.value){
                            window.location.replace('../view/administracao/administrador.php');
                        }
                    })
                }

                if(data == "FalhaLogin"){
                    Swal.fire ({
                        title: "Erro!",
                        text: 'Usuário ou senha inválidos',
                        icon: 'error',
                        confirmButtonText: 'ok'
                    });
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora