# 🚀 Filament Starter Kit with Roles & Permissions

A solid, production-ready foundation built with **Laravel 11** and **Filament v3**. This starter kit provides out-of-the-box authentication, Role-Based Access Control (RBAC), and a pre-configured admin panel to accelerate your application development.

It includes user management, dynamic roles/permissions generation, and a scalable architecture designed to build secure and maintainable admin panels and SaaS applications.

---

## ⭐ Key Features

- 🔐 **Full Authentication** system ready to go.
- 👥 **User Management** with built-in CRUD operations.
- 🛡️ **Dynamic RBAC** (Role-Based Access Control) via Filament Shield.
- 🔑 **Automatic Generation** of policies and permissions.
- 🎛️ **Powerful Admin Panel** powered by Filament.
- 🎨 **Modern Shadcn-style Theme** for a clean and aesthetic UI.
- 🧱 **Production-Ready** project structure.
- 🚀 **Scalable Architecture** ideal for SaaS projects.
- ⚙️ **Simple & Fast** configuration.

---

## 📦 Installation & Setup

Follow these steps to set up the project in your local environment.

### ✅ Prerequisites

- PHP 8.2+
- Composer
- Database (MySQL, SQLite, PostgreSQL)
- Node.js & NPM (Optional)

---

### ⚡ Step 1: Install Dependencies

```bash
composer install
```

---

### ⚡ Step 2: Environment Configuration

Copy the example file and configure your database credentials.

```bash
cp .env.example .env
```

Example `.env` configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament_starter
DB_USERNAME=root
DB_PASSWORD=
```

---

### ⚡ Step 3: Generate Application Key

```bash
php artisan key:generate
```

---

### ⚡ Step 4: Run Migrations

```bash
php artisan migrate
```

---

### ⚡ Step 5: Setup Roles & Permissions (Shield)

Run the Filament Shield setup command to generate the RBAC structure:

```bash
php artisan shield:setup
```

#### Recommended Options during setup:

- Reinstall? → **Yes**
- Multi-tenancy? → **No**
- Install for panel? → **admin**
- Generate? → **Policies & Permissions**
- Create super admin? → **Yes**

---

### ⚡ Step 6: Create Filament User (Optional)

If you didn't create a super admin in the previous step, create one manually:

```bash
php artisan make:filament-user
```

---

### ⚡ Step 7: Start Development Server

```bash
php artisan serve
```

---

## 🎉 Access the Panel

Open your browser and visit:

👉 http://localhost:8000/admin

Log in using the credentials created during setup.

---

## ✅ Verify Installation

Once logged in, verify you can:

- Access the administration dashboard.
- Manage users and assign roles.
- View the generated permissions.
- Access protected resources based on your role.

---

## 🧪 Troubleshooting

If you encounter cache or display issues, clear the environment:

```bash
php artisan optimize:clear
```

---

## 🤝 Contributing

Contributions are welcome! Feel free to open an Issue or submit a Pull Request to improve this kit.

---

## 📄 License

This project is licensed under the MIT License.

---

Developed with ❤️ by ** Javier Cervantes 🇲🇽**  
Software Engineer & Full-Stack Developer
