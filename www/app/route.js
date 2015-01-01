var url = 'http://localhost/magangdimana/api/';
var logo = 'http://localhost/magangdimana/assets/logo/';


var app = angular.module('magang', [
  "ngRoute",
  "ngTouch",
  "mobile-angular-ui",
]);

app.config(function($routeProvider, $locationProvider) {
  $routeProvider.when('/',                {templateUrl: "app/view/home.html", controller: 'homeCtrl'});
  $routeProvider.when('/perusahaan',      {templateUrl: "app/view/perusahaan.html", controller: 'perusahaanCtrl'}); 
  $routeProvider.when('/perusahaan/:id',  {templateUrl: "app/view/detailperusahaan.html", controller: 'perusahaanIdCtrl'});

  $routeProvider.when('/kategori',        {templateUrl: "app/view/kategori.html", controller: 'kategoriCtrl'}); 
  $routeProvider.when('/kategori/:id',    {templateUrl: "app/view/detailkategori.html", controller: 'kategoriIdCtrl'}); 
  
  $routeProvider.when('/about',           {templateUrl: "app/view/about.html", controller: 'aboutCtrl'}); 
});

app.controller('MainController', function($rootScope, $scope, $location){
  $rootScope.$on("$routeChangeStart", function(){
    $rootScope.loading = true;
  });

  $rootScope.$on("$routeChangeSuccess", function(){
    $rootScope.loading = false;
  });

  $rootScope.back = function (argument) {
    history.back(-1);
  }

  $rootScope.logo = logo;

});

app.controller('homeCtrl', function($rootScope, $scope, $http){
  $rootScope.backButton = false;
  $rootScope.mainMenu = true;
  $rootScope.breadcrumb = 'Home';

  $http.get(url+'perusahaan')
    .then(function(res){
      $scope.perusahaan = res.data;
    });
  
});

// Perusahaan
app.controller('perusahaanCtrl', function($rootScope, $scope, $http){
  $rootScope.backButton = false;
  $rootScope.mainMenu = true;
  $rootScope.breadcrumb = 'Perusahaan';

  $http.get(url+'perusahaan/all')
    .then(function(res){
      $scope.perusahaan = res.data;
    });

});

app.controller('perusahaanIdCtrl', function($rootScope, $scope, $http, $routeParams){
  $rootScope.backButton = true;
  $rootScope.mainMenu = false;
  var id = $routeParams.id;

  $http.get(url+'perusahaan/get/'+id)
  .then(function(res){
    $scope.perusahaan = res.data;
    $rootScope.breadcrumb = res.data.nama;
  });

});


// Kategori
app.controller('kategoriCtrl', function($rootScope, $scope, $http){
  $rootScope.backButton = false;
  $rootScope.mainMenu = true;
  $rootScope.breadcrumb = 'Daftar Kategori';

  $http.get(url+'kategori')
    .then(function(res){
      $scope.kategori = res.data;
    });  
});

app.controller('kategoriIdCtrl', function($rootScope, $scope, $http, $routeParams){
  $rootScope.backButton = true;
  $rootScope.mainMenu = false;
  var id = $routeParams.id;

  $http.get(url+'kategori/get/'+id)
    .then(function(res){
      $rootScope.breadcrumb = res.data.kategori;
    });  


  $http.get(url+'kategori/getPerusahaan/'+id)
    .then(function(res){
      $scope.perusahaan = res.data;
    });  

});

app.controller('aboutCtrl', function($rootScope, $scope, $http){
  $rootScope.backButton = false;
  $rootScope.mainMenu = true;
  $rootScope.breadcrumb = 'About';

  $scope.logo = 'assets/img/logo.png';
});


