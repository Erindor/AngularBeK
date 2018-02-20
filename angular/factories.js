/*global app*/

app.factory("clienteFactory", clienteFactory);

function clienteFactory($http) {

    function salvarCliente(cli){
        return $http({
            url: caminho_scripts_raiz + "/cliente_cadastrar.php",
            method: "POST",
            data: {
                "nome": cli.nome, 
                "empresa": cli.empresa,
                "telefone1": cli.telefone1,
                "telefone2": cli.telefone2,
                "email": cli.email
            }
        });
    }

    return {
        salvarCliente: salvarCliente
    };
}