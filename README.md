# CRUD de Usuarios – Yii2

Prueba técnica para vacante de **Desarrollador Backend**.  
Aplicación web que implementa un CRUD de usuarios usando **Yii2**, **PHP 8** y **MySQL**, con validaciones y contraseña encriptada.

---

## 🚀 Tecnologías utilizadas
- PHP 8.x
- Yii Framework 2.0
- MySQL
- Bootstrap 5
- Composer
- Docker (opcional)

---

# ▶️ EJECUCIÓN LOCAL (SIN DOCKER)

## 📋 Requisitos
- PHP >= 8.0
- Composer
- MySQL (XAMPP recomendado)
- Git

## ⚙️ Instalación
```bash
git clone https://github.com/DiegoDefault04/CRUDYII.git
cd CRUDYII
composer install
```

Crear base de datos `yii2_crud` y configurar `config/db.php`.

```bash
php yii serve
```

Abrir:
http://localhost:8080/index.php?r=user/create

---

# 🐳 EJECUCIÓN CON DOCKER

## 📋 Requisitos
- Docker Desktop

## ▶️ Levantar proyecto
```bash
docker-compose up --build
```

Abrir:
http://localhost:8080

## 🛑 Detener
```bash
docker-compose down
```

---

## 📌 Notas
No se sube el contenedor generado, solo:
- Dockerfile
- docker-compose.yml
