var app = angular.module("app", ['jtt_youtube', 'ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home.html"
    })
    .when("/bios", {
        templateUrl : "bios.html"
    });

});


app.controller('controller', ['$scope', 'youtubeFactory', function($scope, youtubeFactory) {

    var _apiKey = "AIzaSyDn2z-CE1ScVGNJzVMp4FgGheS3l0_MVD0";

    youtubeFactory.getVideosFromChannelById({
        channelId: "UCRQFzmYCj_GKzWwYa8WLOIg",
        maxResults: "50",
        key: _apiKey,
    }).then(function (_data) {
        var _data = _data.data.items;
        var _inicial = _data[0].id;

        console.info("videos from channel by id", _data);
        console.info("ultimo", _inicial.videoId );
        $scope.videos = _data;
        $scope.inicial = _inicial;
    });

  
}]);
