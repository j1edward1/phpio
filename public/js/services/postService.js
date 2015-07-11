// public/js/services/postService.js



angular.module('postService', [])

    .factory('Post', function($http) {

        return {
            // get all the posts
            get : function() {
                return $http.get('/api/posts');
            },

            // save a post (pass in post data)
            save : function(postData) {
                return $http({
                    method: 'POST',
                    url: '/api/posts',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(postData)
                });
            },

            // destroy a post
            destroy : function(id) {
                return $http.delete('/api/posts/' + id);
            }
        }

    });