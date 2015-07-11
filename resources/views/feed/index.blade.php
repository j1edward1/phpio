@extends('layout.default')
@section('view_content')
    <div class="container" ng-app="postApp" ng-controller="mainController">
        <div class="col-md-8 col-md-offset-2">

            <!-- PAGE TITLE =============================================== -->
            <div class="page-header">
                <h2>PHPio</h2>
                <h4>Posty</h4>
            </div>




            <!-- NEW POST FORM =============================================== -->
            <form ng-submit="submitPost()">
                <!-- ng-submit will disable the default form action and use our function -->



                <!-- COMMENT TEXT -->
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="postContent" ng-model="postData.content"
                           placeholder="Add a Posty">
                </div>

                <!-- SUBMIT BUTTON -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>

            <!-- LOADING ICON =============================================== -->
            <!-- show loading icon if the loading variable is set to true -->
            <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

            <!-- THE POSTS =============================================== -->
            <!-- hide these posts if the loading variable is true -->
            <div class="post_container" ng-hide="loading" ng-repeat="post in posts">
                <h3>@{{ post.postDate }}
                    <small>by @{{ post.user_id }}</small></h3>
                <p>@{{ post.content }}</p>

                <p><a href="#" ng-click="deletePost(post.id)" class="text-muted">Delete</a></p>
            </div>

        </div>
    </div>
@stop
