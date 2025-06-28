# 📚 Sistema de Préstamo de Libros - Biblioteca Virtual

Proyecto desarrollado con Laravel 10 y Oracle XE 21c, usando el driver `yajra/laravel-oci8` para la conexión.

---

## 🚀 Funcionalidades

- **Módulo Libros**  
  - Listar libros  
  - Registrar nuevos libros  
  - Eliminar libros

- **Módulo Préstamos**  
  - Listar préstamos  
  - Registrar préstamos usando procedimiento almacenado y triggers en Oracle  

---

## 🗄️ Base de datos Oracle

- Secuencias y triggers para IDs automáticos  
- Procedimientos almacenados para inserción controlada  

---

## ⚙️ Tecnologías usadas

- Laravel 10  
- Oracle XE 21c  
- yajra/laravel-oci8  
- Bootstrap 5 para el diseño visual  

---

## 💻 Cómo correr el proyecto

1. Clonar repositorio  
2. Configurar `.env` con credenciales Oracle  
3. Ejecutar `composer install`  
4. Correr servidor: `php artisan serve`  
5. Abrir navegador en `http://127.0.0.1:8000/libros` o `/prestamos`

---

## 📝 Conclusiones

- Aprendí a conectar Laravel con Oracle usando OCI8  
- Implementé CRUD y consumo de procedimientos PL/SQL desde Laravel  
- Mejoré la UI con Bootstrap para hacer una app amigable y moderna  

---

**Autor:** Samir Haziel  
