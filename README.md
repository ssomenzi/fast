# Laravel 5.7 scaffold with vue.js + tailwind preset + turbolinks

By cloning this repo and running npm install you get a fast folder containing a new Laravel 5.7 app with vue.js, auth and tailwind presets and turbolinks.

>:warning: If you clone this repo in a folder with a different name you need to fix the browserSync proxy defined in the `webpack.mix.js` file.

- Clone the repo `git clone git@github.com:ssomenzi/fast.git`

- Run `composer install`. 

- Create your `.env` file duplicating the `.env.example` file. 

- Set your db credential in the `.env` file. 

- Run `php artisan key:generate`

- Run `php artisan migrate`.

- Run `npm run watch` and you're ready to go... and to go pretty fast.

## What this repo does

Gives you a Laravel 5.7 app with auth.

Installs the [`laravel-frontend-presets/tailwindcss` npm package](https://github.com/laravel-frontend-presets/tailwindcss)

Installs the [`turbolinks` npm package](https://www.npmjs.com/package/turbolinks) and adds

```js
	import Turbolinks from 'turbolinks'
	Turbolinks.start()
```

to your `resources/js/app.js` file.

Installs the [`vue-turbolinks` npm package](https://github.com/jeffreyguenther/vue-turbolinks) and adds

```js
	import TurbolinksAdapter from 'vue-turbolinks'
	Vue.use(TurbolinksAdapter)
```

to your `resources/js/app.js` file.


In your `resources/js/app.js` file, wraps your vue.js instance creation in a listener to fix lifecycle conflicts between vue and turbolinks 

```js
	document.addEventListener('turbolinks:load', () => {
	    let app = new Vue({
	        el: '#app'
	    })
	})
```

In your `webpack.mix.js` file, adds an option to the browserSync configuration object to insert the turbolinks js snippet in the `<head>` section of your page so it is not added on each page load

```
	snippetOptions: {
		rule: {
			match: /<\/head>/i,
			fn: function (snippet, match) {
				return snippet + match;
			}
		}
	}
``` 

Changes the home view and adds an about view with some tailwind magic with their links in the navigation bar and the related routes in the `routes/web.php` file, just to show that turbolinks is working fine.