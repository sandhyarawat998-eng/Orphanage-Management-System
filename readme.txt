# 🏠 Orphanage Management System

> A web-based system for managing orphanage users, adoption requests, profiles, and administrative operations.

---

## 📌 About the Project

The **Orphanage Management System** is a web-based application developed using **PHP and MySQL**.

The system provides a centralized platform for managing orphanage-related activities. Users can register, log in using their email and password, manage their profiles, submit adoption requests, and track their request history.

Administrators can manage registered users, adoption requests, user information, and other system operations through an administrative panel.

---

## ✨ Features

### 👤 User Features

- 📝 User Registration
- 🔐 Email & Password Login
- 🔑 Forgot Password
- 👤 User Profile Management
- 🔒 Change Password
- 🏠 View Orphanage Information
- 📋 Submit Adoption Requests
- 🔎 View Adoption Request Details
- 📜 View Request History
- 🚪 Logout

### 🛡️ Admin Features

- 🔐 Admin Login
- 🔑 Admin Forgot Password
- 👤 Admin Profile Management
- 👥 Manage Users
- ✏️ Edit User Information
- 📋 Manage Adoption Requests
- 🔎 View Adoption Request Details
- 📊 Administrative Dashboard
- 🚪 Logout

---

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| **HTML5** | Page Structure |
| **CSS3** | Styling |
| **JavaScript** | Client-Side Functionality |
| **PHP** | Backend Development |
| **MySQL** | Database |
| **Bootstrap** | UI Framework |
| **jQuery** | JavaScript Library |
| **XAMPP** | Local Development Server |
| **phpMyAdmin** | Database Management |
| **Git & GitHub** | Version Control |

---

## 📂 Project Structure

```text
Orphanage-Management-System/
│
├── oms/
│   ├── admin/
│   ├── css/
│   ├── js/
│   ├── images/
│   ├── includes/
│   │
│   ├── index.php
│   ├── signup.php
│   ├── signin.php
│   ├── profile.php
│   ├── setting.php
│   ├── adoption-requset.php
│   ├── request-history.php
│   └── ...
│
├── omsdb.sql
├── .gitignore
└── README.md
```

---

## ⚙️ Installation & Setup

### 1️⃣ Install XAMPP

Install **XAMPP** with the following components:

- Apache
- MySQL
- phpMyAdmin

---

### 2️⃣ Clone the Repository

Open your terminal and run:

```bash
git clone https://github.com/sandhyarawat998-eng/Orphanage-Management-System.git
```

---

### 3️⃣ Move the Project to XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The project should be located at:

```text
C:\xampp\htdocs\Orphanage-Management-System\
```

---

### 4️⃣ Start XAMPP

Open the **XAMPP Control Panel** and start:

- Apache
- MySQL

Both services should be running before opening the project.

---

### 5️⃣ Create the Database

Open phpMyAdmin in your browser:

```text
http://localhost/phpmyadmin
```

Create a new database named:

```text
omsdb
```

---

### 6️⃣ Import the Database

Select the `omsdb` database in phpMyAdmin.

Then:

1. Click **Import**
2. Click **Choose File**
3. Select `omsdb.sql`
4. Click **Import** / **Go**

The required database tables will then be created.

---

### 7️⃣ Configure Database Connection

Open the database configuration file in the project and make sure the credentials match your local XAMPP configuration.

Example:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'omsdb');
```

---

### 8️⃣ Run the Application

Open your browser and visit:

```text
http://localhost/Orphanage-Management-System/oms/
```

The application should now be available locally.

---

## 🔑 Login System

### 👤 User Login

Registered users can log in using:

```text
Email
Password
```

### 🛡️ Admin Login

Administrators can log in using:

```text
Admin Email
Password
```

---

## 🗄️ Database

The application uses a **MySQL** database named:

```text
omsdb
```

The database contains tables for managing:

- 👤 Users
- 🛡️ Administrators
- 🏠 Adoption Requests
- 📋 User Information
- 📄 Adoption-Related Records
- 📊 Other System Data

The database structure is provided in:

```text
omsdb.sql
```

---

## 🔒 Security

The application includes:

- Session-based authentication
- Login validation
- User/Admin access separation
- Form validation
- Prepared SQL statements
- Password verification

> **Note:** For production deployment, additional security measures such as HTTPS, secure password hashing, CSRF protection, secure session configuration, and token-based password reset should be implemented.

---

## 🚀 Future Improvements

Planned or possible improvements include:

- 📧 Email Notifications
- 🔢 OTP-Based Password Reset
- 📊 Improved Admin Dashboard
- 🔎 Advanced Search and Filtering
- 📈 Reports and Analytics
- 👥 Role-Based Access Control
- 🔐 Enhanced Security
- 📱 Improved Responsive Design
- 🌐 Online Deployment
- 💬 Email-Based Communication
- 📋 Improved Adoption Application Tracking

---

## 👨‍💻 Author

### Sandhya Rawat

GitHub:  
https://github.com/sandhyarawat998-eng

---

## 📄 License

This project is developed for **educational and project purposes**.

---

## ⭐ Support

If you find this project useful, consider giving the repository a ⭐ on GitHub.
