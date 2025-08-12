# 🎓 EduTrack - Student Management System (Laravel)

A simple **Student Management System** built with Laravel and MySQL.  
It allows administrators to **manage students** with features like CRUD operations, search, pagination, and a dashboard overview.

---

## 🚀 Features
- 📋 Add, View, Edit, and Delete Students  
- 🔍 Search students by name, email, or other fields  
- 📊 Dashboard with total students and class-wise statistics  
- 📑 Pagination for student list  
- 🎨 Clean and responsive UI (Bootstrap)  

---

## 🛠 Tech Stack
- **Backend:** Laravel 10+
- **Frontend:** Blade Templates, Bootstrap 5
- **Database:** MySQL
- **Server:** PHP 8.1+  

---

## ⚙️ Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/kavitab7/EduTrack.git
cd student-management
````

### 2️⃣ Install dependencies

```bash
composer install
```

### 3️⃣ Configure `.env`

```bash
cp .env.example .env
```

Update the `.env` file with your **database credentials**:

```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4️⃣ Generate application key

```bash
php artisan key:generate
```

### 5️⃣ Run migrations

```bash
php artisan migrate
```

### 6️⃣ Start the development server

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

