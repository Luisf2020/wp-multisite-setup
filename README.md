# wp-multisite-setup

![stack: WordPress Multisite](https://img.shields.io/badge/stack--WordPress%20Multisite-0d9488?style=flat-square) ![stack: PHP](https://img.shields.io/badge/stack--PHP-0d9488?style=flat-square)
![IA: asistido](https://img.shields.io/badge/IA--asistido-6366f1?style=flat-square)

Mu-plugin de WordPress Multisite: configuracion de nuevos sitios y validacion de registro.

> **Transparencia sobre IA:** este proyecto se desarrollo con asistencia de inteligencia artificial (generacion de codigo, revision y documentacion). El codigo fue leido, ejecutado y probado manualmente antes de publicarse. No declara clientes, metricas ni resultados que no puedan verificarse.

## Problema que resuelve

Configurar de forma uniforme cada sitio nuevo de una red WordPress Multisite y controlar quien puede registrarse.

## Solucion implementada

Mu-plugin que aplica valores por defecto al crear un sitio y valida el registro segun el rol del usuario.

### Funcionalidades principales

- Hooks wpmu_new_blog y switch_to_blog
- Valores por defecto por sitio
- Validacion de registro con wpmu_validate_user_signup
- Carga automatica como mu-plugin

## Stack

- WordPress Multisite
- PHP

## Estructura

```
mu-plugins/lz-network-branding.php  # ajustes de red
```

## Puesta en marcha

```bash
# Copiar en wp-content/mu-plugins/ (se carga automaticamente)
```

## Complejidad del proyecto

**Nivel: Intermedio** — Requiere comprender el modelo multi-sitio y los permisos de super admin.

El nivel describe la complejidad tecnica del proyecto, no el grado de dominio de quien lo escribio.

## Despliegue

Mu-plugin de WordPress Multisite; necesita una red WordPress.  
El codigo fuente si esta disponible en este repositorio.

## Autor

**Luis Felipe Zuniga Leon** — Desarrollador de software asistido por IA

- GitHub: <https://github.com/Luisf2020>
- Correo: developerluis2@gmail.com
- WhatsApp: +504 3237 0056

---

_Proyecto de portafolio. El desarrollo se apoyo en herramientas de IA bajo revision tecnica humana._
