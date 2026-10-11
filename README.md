# wp-multisite-setup

Mu-plugin de WordPress Multisite: configuracion de nuevos sitios y validacion de registro.

> Proyecto de portafolio de Luis Felipe Zuniga Leon. Desarrollado con asistencia de IA
> (generacion de codigo, revision y documentacion); el codigo fue revisado y probado manualmente.
> No declara clientes, metricas ni resultados no verificables.

## Stack

- WordPress Multisite
- PHP

## Como ejecutar

```bash
# Copiar en wp-content/mu-plugins/ (se carga automaticamente)
```

## Estructura

```
mu-plugins/lz-network-branding.php  # ajustes de red
```

## Notas de despliegue

1. Activar Multisite (`define('WP_ALLOW_MULTISITE', true);`) y ejecutar el asistente.
2. Copiar `mu-plugins/` a `wp-content/`. Los mu-plugins no requieren activacion.
3. Los cambios de registro se evaluan por rol: solo el super admin puede registrar usuarios con el registro cerrado.

## Estado

Muestra tecnica de portafolio. Sin datos de produccion.
