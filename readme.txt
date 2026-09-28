# Orphanage Management System

A web-based **Orphanage Management System** developed using **PHP and MySQL**. The system is designed to digitally manage users, adoption requests, user profiles, request history, and administrative operations.

## 📌 Project Overview

The Orphanage Management System provides a centralized platform for managing orphanage-related activities.

Users can register for an account, log in using their email and password, manage their profile, submit adoption requests, and track their request history.

Administrators can manage registered users, adoption requests, user information, and other system operations through an admin panel.

## ✨ Features

### 👤 User Features

- User Registration
- Email and Password Login
- Forgot Password
- User Profile Management
- Change Password
- View Orphanage Information
- Submit Adoption Requests
- View Adoption Request Details
- View Request History
- Logout

### 🔐 Admin Features

- Admin Login
- Admin Forgot Password
- Admin Profile Management
- Manage Users
- Edit User Information
- Manage Adoption Requests
- View Adoption Request Details
- Administrative Dashboard
- Logout

## 🛠️ Technologies Used

| Technology | Purpose |
|------------|---------|
| HTML5 | Page Structure |
| CSS3 | Styling |
| JavaScript | Client-Side Functionality |
| PHP | Backend Development |
| MySQL | Database |
| Bootstrap | UI Framework |
| jQuery | JavaScript Library |
| XAMPP | Local Development Server |
| phpMyAdmin | Database Management |
| Git & GitHub | Version Control |

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

## ⚙️ Installation and Setup

### 1. Install XAMPP

Install XAMPP with the following components:

- Apache
- MySQL
- phpMyAdmin

### 2. Clone the Repository

Open your terminal and run:

```bash
git clone https://github.com/sandhyarawat998-eng/Orphanage-Management-System.git
```

### 3. Move the Project to XAMPP

Copy the project folder into the XAMPP `htdocs` directory:

```text
C:\xampp\htdocs\
```

The project should be located at:

```text
C:\xampp\htdocs\Orphanage-Management-System\
```

### 4. Start XAMPP

Open the XAMPP Control Panel and start:

- Apache
- MySQL

### 5. Create the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create a new database named:

```text
omsdb
```

### 6. Import the Database

Select the `omsdb` database in phpMyAdmin.

Go to:

**Import → Choose File**

Select:

```text
omsdb.sql
```

Then click **Import** or **Go**.

### 7. Configure the Database

Make sure the database configuration in the project matches your local XAMPP setup.

Example:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'omsdb');
```

### 8. Run the Project

Open your browser and visit:

```text
http://localhost/Orphanage-Management-System/oms/
```

## 🔑 Login System

### User Login

Normal users log in using:

```text
Email
Password
```

### Admin Login

Administrators log in using:

```text
Admin Email
Password
```

## 🗄️ Database

The project uses a MySQL database named:

```text
omsdb
```

The database contains tables required for managing:

- Users
- Administrators
- Adoption Requests
- User information
- Adoption-related records
- Other system data

The database structure is provided in:

```text
omsdb.sql
```

## 🔒 Security

The system includes:

- Session-based authentication
- Login validation
- User and Admin access separation
- Form validation
- Prepared SQL statements
- Password verification

> For production deployment, additional security measures such as HTTPS, secure password hashing, CSRF protection, secure session configuration, and token-based password reset should be implemented.

## 🚀 Future Improvements

Future versions of the project can include:

- Online adoption application tracking
- Email notifications
- OTP-based password reset
- Improved admin dashboard
- Advanced search and filtering
- Reports and analytics
- Role-based access control
- Enhanced security
- Improved responsive design
- Online deployment
- Email-based communication

## 👨‍💻 Author

**Sandhya Rawat**

GitHub:

https://github.com/sandhyarawat998-eng

## 📄 License

This project is developed for educational and project purposes.
