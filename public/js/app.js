var app = angular.module('fredyyanto', ['ui.router', 'ngAnimate'], function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});