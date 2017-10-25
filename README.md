# AGI Solictors Wordpress Project
### AGI Solictors Wordpress project

#### Requirements:
- Git (http://git-scm.com)
- Node.js (http://nodejs.org)
- Composer (https://getcomposer.org/doc/00-intro.md)
- Gulp (http://gulpjs.com/)

Follow instructions on Node.js and Composer website.


#### Global Installs
- Gulp (http://gulpjs.com/)

### To Install project and dependancies onto dev machine:

Follow instructions on Node.js and Composer website.

Install Gulp globally:
```sh
$ npm install --global gulp-cli
```

#### Git
Clone git
```sh
$ git clone <git project>
$ cd <project folder>
```

#### Composer
Install Composer locally in to the root of the project
- https://getcomposer.org/download/

#### npm
Install npm into root of project
```sh
$ npm install
```

### Development files setup

To run composer to get WP core, files etc
```sh
$ gulp newbuild
```

To run SCSS, SVG icons Scripts, Images and BrowserSync (theme folder files only)
```sh
$ gulp
```

### List of separate gulp tasks:

To delete production files and folders generated from tasks
```sh
$ gulp clean 
```

To process scripts:
```sh
$ gulp scripts 
```

To process styles (run svg-icon-sprite first to generate sprite.scss for the first time):
```sh
$ gulp styles 
```

To process images:
```sh
$ gulp images 
```

To process SVG icon sprites:
```sh
$ gulp svg-icon-sprite 
```
