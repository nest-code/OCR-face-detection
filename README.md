# 🔍 Proyek Deteksi Wajah dengan Laravel & Flask

Proyek ini menggabungkan **Flask** (Python + OpenCV) sebagai backend untuk mendeteksi wajah dan **Laravel** sebagai frontend untuk menampilkan hasilnya secara real-time di web.

## 💡 **1. Persyaratan**

### **💻 Sistem yang Dibutuhkan:**
- Python 3.7+
- OpenCV
- Flask
- Composer (untuk Laravel)
- PHP 7.4+ & Laravel 9+
- Git

---

## 🔧 **2. Struktur Folder Proyek**

```bash
deteksi-wajah-laravel-flask/
│── flask-backend/          # Folder Flask (Python + OpenCV)
│   ├── app.py              # File utama Flask
│   ├── requirements.txt    # Dependencies Python
│── laravel-frontend/       # Folder Laravel
│   ├── app/                # Kode Laravel
│   ├── resources/views/    # View Blade untuk streaming
│   ├── routes/web.php      # Routing Laravel
│   ├── .env.example        # Konfigurasi Laravel
│   ├── composer.json       # Dependencies Laravel
│── README.md               # Panduan ini
```
---

## 🔢 **3. Menjalankan Flask (Backend)**

### **1. Masuk ke Folder Flask**
```bash
cd flask-backend
```

### **2. Buat Virtual Environment (Opsional, Tapi Disarankan)**
```bash
python -m venv venv
source venv/bin/activate  # Untuk macOS/Linux
venv\Scripts\activate     # Untuk Windows
```

### **3. Install Dependensi Flask**
```bash
pip install flask opencv-python
pip freeze > requirements.txt
```

### **4. Jalankan Flask**
```bash
python app.py **pada CMD**
```
👉 **Akses Flask di browser:** `http://127.0.0.1:5000/video_feed`

---

## 🔦 **5. Menjalankan Laravel (Frontend)**

### **1. Masuk ke Folder Laravel**
```bash
cd laravel-frontend
```

### **2. Install Dependencies Laravel**
```bash
composer install
```

### **3. Konfigurasi `.env` Laravel**
```bash
cp .env.example .env
php artisan key:generate
```

### **4. Jalankan Laravel**
```bash
php artisan serve **pada CMD**
```
👉 **Akses Laravel di browser:** `http://127.0.0.1:8000/deteksi-wajah`


## 🔦 **Jalankan **
1. Instal phyton
2. Instal Laravel
3. Jalankan Flask
4. Menjalankan Laravel


Coba jalankan di komputer lain dan beri tahu saya jika ada kendala! 🚀😍

