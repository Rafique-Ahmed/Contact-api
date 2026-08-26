# Contact Management API

A production-focused RESTful API for managing contacts, built with Laravel and Laravel Sanctum.

The API provides authenticated users with contact management, search, dashboard statistics, and automatically generated OpenAPI documentation.

## 🚀 Features

### Authentication

- User registration
- User login
- User logout
- Authenticated user endpoint
- Bearer token authentication with Laravel Sanctum

### Contact Management

- Create contacts
- View contacts
- View individual contacts
- Update contacts
- Delete contacts
- Search contacts by name, email, or phone number

### Dashboard

- Total contacts count for authenticated users

### API

- RESTful API architecture
- Protected API routes
- OpenAPI 3.1 documentation
- Scramble API documentation
- CORS configuration for frontend integration

## 🛠️ Tech Stack

- Laravel 12
- PHP 8.2+
- Laravel Sanctum
- MySQL / PostgreSQL
- Scramble
- REST API
- OpenAPI 3.1

## 🏗️ API Architecture

```text
Client
  │
  │ HTTP / JSON
  ▼
Laravel REST API
  │
  ├── Authentication
  │      └── Laravel Sanctum
  │
  ├── Contact Management
  │      ├── Create
  │      ├── Read
  │      ├── Update
  │      └── Delete
  │
  ├── Search
  │
  └── Dashboard
         │
         ▼
      Database
   MySQL / PostgreSQL
