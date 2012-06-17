# Resources

Resources are created via the [Jam-Resource](../jam-resource) module. Each resource creates its routes and offers easy methods to generate urls and access data about the resource and its model corresponding to the current request.

Here are the main resources defined in Sinefy with their child resources. With each of them are listed the actions, their purpose and method.


## Users
 * __new__  - register form - GET
 * __create__ - register processing - POST
 * __show__ - showing a user profile - GET

	#### Movies
	 * __index__ - showing a list of movies in a user profile - watched, to watch, favourites - GET
	 * __show__ - showing a specific watching with comments and rating - GET

## Me
 * __edit__ - showing a form to edit your user profile - GET
 * __update__ - processing the edit form - PUT
 * __destroy__ - deleting your account - DELETE

	#### Movies
	 * __new__ - button to add a new movie to your account (create a watching in the past or in the future - watched, to watch) - GET
	 * __create__ - create and process the new watching - POST
	 * __edit__ - edit a watching (add a rating or a review) - GET
	 * __update__ - process the editing - PUT
	 * __destroy__ - delete a watching (unmark a movie from being watched etc.) - DELETE

## Movies
 * __index__ - list movies - GET
 * __show__ - show a single movie profile - GET

	#### Comments
	 * __index__ - show a list of comments to a movie - GET
	 * __new__ - show a form for a new comment - GET
	 * __create__ - add a new comment - POST
	 * __destroy__ - delete a comment - DELETE
