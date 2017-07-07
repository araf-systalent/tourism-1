"# tourism" 
https://github.com/endriazizi/tourism.git

…or create a new repository on the command line

echo "# tourism" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/endriazizi/tourism.git
git push -u origin master



…or create a new repository on the command line

echo "# tourism" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/endriazizi/tourism.git
git push -u origin master




PHPunit Uncaught Error: Call to undefined method PHPUnit_Util_Configuration::getTestdoxGroupConfiguration()
https://stackoverflow.com/questions/41868027/phpunit-uncaught-error-call-to-undefined-method-phpunit-util-configurationget



php artisan thinker
$post = factory('App\Post',50)->create()
$post->each(function($post){ factory('App\Reply',10)->create(['post_id' => $post->id]); });