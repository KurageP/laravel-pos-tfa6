# Laravel POS — TFA6

**Student:** Lanz Wayne Villaruel  
**Course:** IT0049 — Web System Technologies  
**Activity:** From Arrays to Eloquent

## Overview

A Laravel application that retrieves customer and user records from
a database using Eloquent and displays them in Blade views.

## Features

- Customer directory with full name, email, and phone.
- User directory with unique username and full name.
- Database migrations for both tables.
- Seeder containing five customers and five users.
- Separate models, controllers, and Blade views.
- Shared layout with navigation between directories.

## Requirements

- PHP 8.2 or compatible newer version
- Composer
- SQLite support enabled in PHP

## Local Setup — Windows PowerShell

Clone this repository, then open a terminal inside its project folder.

Install dependencies:

```powershell
composer install
```

Create the environment file and application key:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

In `.env`, set:

```dotenv
DB_CONNECTION=sqlite
```

Leave `DB_DATABASE` unset so Laravel uses `database/database.sqlite`.

Create the database file if it does not exist:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item -ItemType File -Path database/database.sqlite
}
```

Create the tables and seed sample records:

```powershell
php artisan config:clear
php artisan migrate --seed
```

Start the development server:

```powershell
php artisan serve
```

Open:

- http://127.0.0.1:8000/customers
- http://127.0.0.1:8000/users

The home URL redirects to the customer directory.
Each directory displays five sample records after seeding.

## Database Schema

Both tables include an ID and Laravel timestamps.

| Table | Activity Fields |
|---|---|
| customers | full_name, email, phone |
| users | username (unique), full_name |

The migration and seeder files are included to reproduce the database.
Run `php artisan db:seed` to rerun the sample seeder.
It updates matching sample records instead of duplicating them.

## Scope

This activity implements customer and user listings.
Authentication and sales processing are outside this implementation.