const app = angular.module('app', ['ui.router'])
    .config(function($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: './wp-content/themes/jazzy-theme/views/home.html',
                controller: 'mainCtrl'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: './wp-content/themes/jazzy-theme/views/contact.html',
                controller: 'contactCtrl'
            })
            .state('about', {
                url: '/about',
                templateUrl: './wp-content/themes/jazzy-theme/views/about.html',
                controller: 'aboutCtrl'
            });
            $urlRouterProvider 
            .otherwise('/');
    })