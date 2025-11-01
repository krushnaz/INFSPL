# Quick Start Guide - INFSPL Website

## 🚀 Fastest Way to Run (If you have XAMPP)

1. **Copy project to XAMPP:**
   - Copy entire folder to: `C:\xampp\htdocs\infspl`
   
2. **Start XAMPP:**
   - Open XAMPP Control Panel
   - Click "Start" for Apache
   
3. **Open browser:**
   - Go to: `http://localhost/infspl`

---

## 🔧 If PHP is Not Installed

### Install XAMPP (Easiest Method)
1. Download: https://www.apachefriends.org/download.html
2. Run installer and install to `C:\xampp`
3. During installation, select Apache and PHP
4. After installation, open PowerShell as Administrator and run:
   ```powershell
   [Environment]::SetEnvironmentVariable("Path", $env:Path + ";C:\xampp\php", "User")
   ```
5. Restart PowerShell
6. Verify: `php --version`

### Then Run the Website

**Method 1: Use the batch file**
- Double-click `start-server.bat`

**Method 2: Manual command**
- Open PowerShell in this folder
- Run: `php -S localhost:8000`
- Open browser: `http://localhost:8000`

---

## ⚠️ Important Notes

- **Database**: The site connects to a remote database. It should work if the server is accessible.
- **Port 8000 busy?** Use: `php -S localhost:8001` (or any other port)
- **Need help?** Check `SETUP_INSTRUCTIONS.md` for detailed guide

---

## ✅ What Should Work

Once running, you should see:
- Homepage with slider
- Services section
- Team section  
- Contact page
- Gallery and other pages

---

## 🐛 Common Issues

**"PHP not recognized"**
- PHP not in PATH → Install XAMPP or add PHP to PATH manually

**"Connection failed"**
- Database server might be down → Check `db_connection.php` for correct credentials

**"Port already in use"**
- Another app using port 8000 → Use different port (8001, 8002, etc.)

