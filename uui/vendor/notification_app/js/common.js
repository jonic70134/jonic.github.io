// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
angular.module('uitoxapp', ['ionic'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if(window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})

.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
    .state('home', {
      url: "/",
      templateUrl: "templates/home.html"
    })
    .state('lists', {
      url: "/lists",
      templateUrl: "templates/lists.html"
    })
    .state('detail', {
      url: "/detail",
      templateUrl: "templates/detail.html"
    });
   $urlRouterProvider.otherwise("/");
})

.controller('MsgListCtrl', function($scope, $ionicPopup) {
  //pull to refresh
  $scope.items =  []
  $scope.doRefresh = function() {
    //new item
    $scope.items.unshift({})
    $scope.$broadcast('scroll.refreshComplete');
    $scope.$apply()
  };
  //delete option
  $scope.data = {
    showDelete: false
  };
  //infinite scroll
  var currentStart = 0
  $scope.items = []
  $scope.addItems = function() {
    for (var i = currentStart; i < currentStart+20; i++) {
      //new item
      $scope.items.push()
    }
    currentStart += 20
  }
  $scope.addItems();
});