$(function(){
    //listagem da tabela de custos
    var i = 0;
    $.post("../php/listar.php",
        function (response) {
            $("tbody tr td").each(function() {
                $(this).text(response[i]);
                i++;
            });
        }, 'json'
    );
    $("#btEnv").click(function() {
        var nome = $("#cadNome").val();
        var descricao = $("#cadDescricao").val();
        
        //limpeza do formulário após o botão de envio ser clicado
        $("#cadNome").val('');
        $("#cadDescricao").val('');

        //envio do formulário
        $.ajax({
            type: "POST",
            url: "../php/inserir.php",
            data: {"d1": nome, "d2": descricao},
            dataType: 'html',
            success: function(response){
                if (response) {
                    //listagem da tabela de custos após o cadastro de um novo custo
                    $.post("../php/listar.php",
                    function (response) {
                        i = 0;
                        $( "tbody" ).append( "<tr><td></td><td></td><td></td><td></td></td></tr>" );

                            $("tbody tr td").each(function() {
                                $(this).text(response[i]);
                                i++;
                            })
                        }, 'json'
                    );
                }
                else{
                    console.log("Favor preencher todos os campos.")
                }
                
            },
        })          
    })
});
