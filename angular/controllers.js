/*global app*/

app.controller("clientesController", ["$scope", "clienteFactory", clienteController]);

function clienteController($scope, clienteFactory){
    var vm = this;
    vm.cli = {
        nome : "",
        empresa : "",
        telefone1 :"",
        telefone2 : "",
        email : ""
    };
    vm.clientes = [];

    vm.salvarCliente = salvarCliente;

    function salvarCliente(){
        if (vm.cli.nome != "" || vm.cli.empresa != ""){
            clienteFactory.salvarCliente(vm.cli).then(function(response){
                if (response.data == true){
                    alert ("Cliente cadastrado com sucesso!");
                    window.location.href = "http://localhost/bek/#!/clientes";
                }
                else{
                    alert ("Houve algum erro ao cadastrar o cliente!");
                }
            });
        } else{
            alert ("Digite o nome do cliente ou da empresa!");
        }
    }
}


