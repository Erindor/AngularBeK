var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "inicio.html"
        })
        .when("/clientes", {
            templateUrl: "clientesInicio.html"
        })
        .when("/cadastrarCliente", {
            templateUrl: "cadastrarCliente.html"
        })
        .otherwise({
            template: "Pagina nao encontrada."
        });
});