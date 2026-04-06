# Contact Management API

A production-ready RESTful API for managing contacts, built with Laravel 12 and Laravel Sanctum.

## 🚀 Features

- **Authentication**: User registration, login, and logout using Laravel Sanctum
- **Contact Management**: Complete CRUD operations for contacts
- **Search Functionality**: Search contacts by name, email, or phone number
- **Dashboard**: Get total contacts count for authenticated user
- **API Documentation**: Auto-generated OpenAPI documentation with Scramble
- **Security**: Protected routes with Bearer token authentication
- **CORS Ready**: Configured for React frontend integration

## 🛠️ Tech Stack

- Laravel 12
- Laravel Sanctum (API Authentication)
- MySQL / PostgreSQL
- Scramble (OpenAPI 3.1 Documentation)
- PHP 8.2+

## 📋 API Endpoints

| Method | Endpoint | Description | Auth Required |
|--------|----------|-------------|---------------|
| POST | `/api/register` | Register new user | No |
| POST | `/api/login` | Login user | No |
| POST | `/api/logout` | Logout user | Yes |
| GET | `/api/user` | Get authenticated user | Yes |
| GET | `/api/contacts` | List all contacts | Yes |
| POST | `/api/contacts` | Create new contact | Yes |
| GET | `/api/contacts/{id}` | Get specific contact | Yes |
| PUT | `/api/contacts/{id}` | Update contact | Yes |
| DELETE | `/api/contacts/{id}` | Delete contact | Yes |
| GET | `/api/dashboard` | Get total contacts count | Yes |
| GET | `/api/contacts?search={query}` | Search contacts | Yes |

## 🔧 Installation

### Prerequisites
- PHP >= 8.2
- Composer
- MySQL >= 5.7 or PostgreSQL >= 10
- Laravel 12

### Steps

1. **Clone the repository**
```bash