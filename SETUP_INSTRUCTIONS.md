# INFSPL Website Setup Instructions

## Prerequisites

This PHP website requires:
1. **PHP 7.4 or higher** installed on your system
2. **Composer** (for managing PHP dependencies - already installed in vendor folder)
3. A web server (PHP built-in server can be used for development)
4. MySQL database connection (currently configured to use remote database)

## Step 1: Install PHP

### Option A: Using XAMPP (Recommended for Windows)

1. Download XAMPP from: https://www.apachefriends.org/download.html
2. Install XAMPP (it includes PHP, Apache, MySQL)
3. After installation, add PHP to your system PATH:
   - Navigate to: Control Panel → System → Advanced System Settings → Environment Variables
   - Edit the "Path" variable
   - Add: `C:\xampp\php` (or wherever XAMPP installed PHP)
   - Restart your terminal/PowerShell

### Option B: Using PHP Standalone

1. Download PHP from: https://windows.php.net/download/
2. Extract to a folder (e.g., `C:\php`)
3. Add PHP to your system PATH:
   - Navigate to: Control Panel → System → Advanced System Settings → Environment Variables
   - Edit the "Path" variable
   - Add: `C:\php` (or wherever you extracted PHP)
   - Restart your terminal/PowerShell

## Step 2: Verify Installation

Open PowerShell and run:
```powershell
php --version
```

You should see PHP version information.

## Step 3: Database Configuration

The website is currently configured to connect to a remote database server:
- **Server**: 89.117.157.204
- **Database**: u156619954_infs
- **Username**: u156619954_infs
- **Password**: Investments2023@

If you need to use a local database instead:
1. Edit `db_connection.php`
2. Update the connection parameters:
   ```php
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $database = "your_database_name";
   ```
3. Create the database and import any SQL files if available

## Step 4: Run the Website

### Using PHP Built-in Server (Development)

1. Open PowerShell in the project directory
2. Run the following command:
   ```powershell
   php -S localhost:8000
   ```
3. Open your browser and go to: `http://localhost:8000`

### Using XAMPP (Production-like)

1. Copy the entire project folder to `C:\xampp\htdocs\infspl`
2. Start XAMPP Control Panel
3. Start Apache service
4. Open browser and go to: `http://localhost/infspl`

## Step 5: Verify Dependencies

The project uses Composer for PHP dependencies. If you need to reinstall:
```powershell
composer install
```

## Troubleshooting

### PHP not found error
- Make sure PHP is added to your system PATH
- Restart your terminal after adding to PATH

### Database connection error
- Check if the remote database server is accessible
- Verify database credentials in `db_connection.php`
- Check firewall settings

### Port 8000 already in use
- Use a different port: `php -S localhost:8001`

### Page not loading
- Check PHP error logs
- Verify all files are in the correct directory structure
- Ensure `index.php` is in the root directory

## Project Structure

- `index.php` - Main homepage
- `db_connection.php` - Database configuration
- `composer.json` - PHP dependencies
- `vendor/` - Composer packages (PHPMailer)
- Other PHP files for various pages (contact, services, etc.)

## Next Steps

After setting up PHP and starting the server:
1. Visit `http://localhost:8000` in your browser
2. Test all pages and functionality
3. Check if database connections are working
4. Review any error messages in browser console or PHP logs

