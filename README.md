## Getting Started

To get started with this project, you can clone the repository to your local machine using the following command:

```bash
git clone git@github.com:ArtMajon/artists-test.git
```

Once cloned, navigate to the project directory:

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL
- spatie/laravel-query-builder: ^5.7

### Installing Dependencies

After cloning the repository, install the project dependencies using Composer:
```bash
composer install
```

Create a new key for the Laravel application
```bash
php artisan key:generate
```


Configure your database connection in the .env file. Then run database migrations:
```bash 
php artisan migrate
```

After the migration, run a seeder to fill the database with fake artists.
```bash 
php artisan db:seed --class=ArtistSeeder
```

You can run the application using the built-in PHP development server:
```bash 
php artisan serve
```

## API Endpoints

- `GET /artists`: Get all artists.
- `GET /artists/filter/active/{status}`: Filter artists by active/inactive status.
- `GET /artists/filter/email/{email}`: Filter artists by email.
-   Or you can use the spatie query filter
- `GET /artists?filter[active]={1 or 0}`: Filter artists by active/inactive status.
- `GET /artists?filter[email]={any_email_from_db_artists}`: Filter artists by email.

## API Endpoints Examples

The application will be available at http://localhost:8000 

- `http://localhost:8000/artists`: Get all artists.
- `http://localhost:8000/artists?filter[active]=1`: Filter active artists.
- `http://localhost:8000//artists?filter[email]=any_email_from_db_artists`: Filter artists by email.
-  or
- `http://localhost:8000/artists/filter/active/active|inactive`: Filter artists by active/inactive status.
- `http://localhost:8000/artists/filter/email/any_email_from_db_artists`: Filter artists by email.
