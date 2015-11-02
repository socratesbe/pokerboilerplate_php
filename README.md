SoCraTes Microservice Poker PHP Boilerplate
=================================================

This is a boilerplate setup to get going quickly with a PHP microservice. We provided a few things for you:


What's included?
-------------------------------------------------

- Front controller `index.php` is the main route into your application. Every HTTP request arrives here. You can define your routes and controllers here, or you can restructure everything if you want to go more advanced. The web library we're using is really flexible and puts you in control.
- Silex is included as web library, all documentation can be found [on the Silex homepage](http://silex.sensiolabs.org/).
- Namespace `Poker` will be autoloaded from the `src/` directory. Just create the directory and get going if you want to use it.


How to go live as fast as possible?
-------------------------------------------------

1. Clone this repo
2. Create an account on [Fortrabbit](http://www.fortrabbit.com/)
3. Create [a new application](https://dashboard.fortrabbit.com/apps/new/) inside your fortrabbit account.
4. Copy your public key `cat ~/.ssh/id_rsa.pub | pbcopy`
5. Add it to your Fortrabbit application under "ssh access"
6. Copy the git url that Fortrabbit gives you
7. Add that url as a remote to your local repository `git remote add fortrabbit <url>`. Don't forget to replace `<url>` with the real url you copied in step 4.
8. Deploying is as easy as pushing to that remote: `git push fortrabbit master`
9. Visit your fortrabbit app's URL to see your microservice working!
