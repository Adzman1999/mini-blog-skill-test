# THIS IS SKILL TEST - BUILDING MINI BLOG

## Usage

### Clone the Repo

First clone the repository and open your terminal then use the command to go the repository folder.

```
git clone https://github.com/Adzman1999/mini-blog-skill-test
```

```
cd mini-blog-skill-test
```

### Install Dependencies

Second Install dependencies using composer

```
composer install
```

### Manage .env variable

Third copy .env.example variables and then create new file name .env then paste the variables. find and change this variables to DB_DATABASE=mini_blog_db

### Generate Key

Fourth is to generate specific key in .env

```
php artisan key:generate
```

### Migrate the existing data

Fifth is to migrate data to database

```
php artisan migrate
```

### Running the App

Last step is to run the application

```
php artisan serve
```
