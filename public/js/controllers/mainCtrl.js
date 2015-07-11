// public/js/controllers/mainCtrl.js

angular.module('mainCtrl', [])

// inject the Post service into our controller
    .controller('mainController', ['$scope', '$http', 'Post', function($scope, $http, Post) {
        // object to hold all the data for the new post form
        $scope.postData = {};



        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the posts first and bind it to the $scope.posts object
        // use the function we created in our service
        // GET ALL POSTS ==============

        Post.get()
            .success(function(data) {
                $scope.posts = data;
                $scope.loading = false;

                console.log(JSON.stringify($scope.posts));

            });

        // function to handle submitting the form
        // SAVE A POSTS ================
        $scope.submitPost = function() {
            $scope.loading = true;

            //alert('Submitting...' + JSON.stringify($scope.postData));

            // save the post. pass in post data from the form
            // use the function we created in our service
            Post.save($scope.postData)
                .success(function(data) {

                    // if successful, we'll need to refresh the post list
                    Post.get()
                        .success(function(getData) {
                            $scope.posts = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a post
        // DELETE A POST ====================================================
        $scope.deletePost = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Post.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the post list
                    Post.get()
                        .success(function(getData) {
                            $scope.posts = getData;
                            $scope.loading = false;
                        });

                });
        };

    }]);