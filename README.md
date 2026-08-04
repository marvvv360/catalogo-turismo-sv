# 🌴 Catálogo Turístico de El Salvador - Implementación MVC en Laravel

Aplicación web desarrollada con el framework **Laravel** que implementa el patrón arquitectónico **Modelo-Vista-Controlador (MVC)** para la consulta, exploración y detalle de destinos turísticos en El Salvador, utilizando un archivo **JSON** como fuente principal de datos.

---

## 📌 Descripción del Proyecto

El objetivo principal de esta aplicación es demostrar el mapa y ciclo de vida de una petición HTTP en Laravel mediante la separación clara de responsabilidades:
* **Exploración de Destinos:** Catálogo con tarjetas interactivas que muestran imágenes, nombres, departamentos, categorías y precios.
* **Detalle de Destino:** Vista individualizada para consultar información completa sobre un sitio específico.
* **Formulario de Contacto:** Sección para que los usuarios puedan solicitar información sobre los destinos turísticos.

---

## ⚙️ Requisitos del Sistema e Instalación

### Prerrequisitos
* **PHP:** versión >= 8.1
* **Composer:** Administrador de dependencias de PHP
* **Servidor Web Local:** XAMPP (Apache) o el servidor de desarrollo integrado de Laravel

---

### Pasos de Instalación

1. **Clonar o descargar el repositorio:**
   ```bash
   git clone [https://github.com/TU_USUARIO/catalogo-turismo-sv.git](https://github.com/TU_USUARIO/catalogo-turismo-sv.git)
   cd catalogo-turismo-sv

#### Descripción del Flujo MVC Implementado

```mermaid
graph TD
    A["Usuario / Navegador"] -->|"1. Petición HTTP GET /sitios"| B["Rutas: web.php"]
    B -->|"2. Delega al método index"| C["Controller: SitioController.php"]
    C -->|"3. Lee archivo"| D[("Capa de Datos: lugares.json")]
    D -->|"4. Retorna arreglo de datos"| C
    C -->|"5. Envía datos a la vista"| E["Vista: Blade Templates"]
    E -->|"6. Renderiza HTML final"| A