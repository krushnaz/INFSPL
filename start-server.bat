@echo off
echo ========================================
echo INFSPL Website - Starting PHP Server
echo ========================================
echo.

REM Check if PHP is available
php --version >nul 2>&1
if %errorlevel% neq 0 (
    echo ERROR: PHP is not installed or not in PATH
    echo.
    echo Please install PHP first:
    echo 1. Download XAMPP from: https://www.apachefriends.org/download.html
    echo 2. Install XAMPP
    echo 3. Add C:\xampp\php to your system PATH
    echo 4. Restart this script
    echo.
    echo OR use standalone PHP:
    echo 1. Download from: https://windows.php.net/download/
    echo 2. Extract and add to PATH
    echo.
    pause
    exit /b 1
)

echo PHP found! Starting development server...
echo.
echo Server will be available at: http://localhost:8000
echo Press Ctrl+C to stop the server
echo.
echo ========================================
echo.

REM Start PHP built-in server
php -S localhost:8000

pause

