# Fortaleciendo la Seguridad de la Autenticación: Solución Innovadora con FIDO y PrivacyIDEA en Acción 🔐

Este repositorio contiene la investigación, despliegue y documentación técnica del Trabajo Fin de Grado (TFG) centrado en la implementación de tecnologías de autenticación modernas y sin contraseñas (Passwordless).

El objetivo principal de este proyecto es explorar las bondades de la tecnología FIDO en comparación con métodos tradicionales, proponiendo una solución efectiva para mejorar la seguridad y la experiencia de usuario en la **Universidad de Huelva**. El sistema utiliza **PrivacyIDEA**, un sistema de gestión de identidad y autenticación de código abierto, para evaluar su eficacia y compararlos con la tecnología FIDO.

---

## 📖 Resumen del Proyecto

Los métodos de autenticación tradicionales, como las contraseñas estáticas, presentan graves problemas de vulnerabilidad frente a ataques de fuerza bruta, diccionario, *phishing* e ingeniería social. Este proyecto aborda estos retos mediante el despliegue de **FIDO2** y **WebAuthn**, estándares que permiten la autenticación fuerte basada en criptografía de clave pública (asimétrica).

A través de la integración de **SimpleSAMLphp** como Proveedor de Identidad (IdP) y Proveedor de Servicios (SP), junto con **PrivacyIDEA** como backend de gestión de tokens, se ha logrado adaptar la infraestructura al **Esquema Nacional de Seguridad (ENS)**.

---

## 🎯 Objetivos

### Objetivos Generales
* Desarrollar FIDO y PrivacyIDEA dentro del marco de SimpleSAMLphp, asegurando la conformidad con el Esquema Nacional de Seguridad (ENS).
* Realizar pruebas exhaustivas para evaluar la eficacia y seguridad de la autenticación de dos factores (2FA).
* Analizar y adaptar el Proveedor de Identidad (IDP) de la Universidad de Huelva al ENS.

### Objetivos Específicos
* Comparar los resultados con métodos 2FA tradicionales como SMS o correos electrónicos.
* Estudiar en profundidad el ENS y sus implicaciones en la autenticación.
* Analizar el estándar WebAuthn y su aplicación en entornos SimpleSAMLphp.

---

## 🛠️ Stack Tecnológico

* **FIDO2 / WebAuthn:** Estándares abiertos para la autenticación web segura y sin contraseñas.
* **CTAP (Client to Authenticator Protocol):** Protocolo para la comunicación segura entre el cliente web y el autenticador físico.
* **PrivacyIDEA:** Plataforma centralizada de código abierto para la gestión de múltiples factores de autenticación y tokens.
* **SimpleSAMLphp:** Framework en PHP para la autenticación federada (SAML, OAuth, OpenID Connect).
* **Infraestructura Base:** Servidores web Apache2, PHP (7.1/7.2), Composer y bases de datos SQL.
* **Criptografía:** Curva Elíptica (ECC) para generación de claves eficientes y HMAC para la integridad de los mensajes.

---

## 🏗️ Arquitectura del Sistema

El diseño del sistema se ha distribuido en tres componentes o servidores principales para garantizar la seguridad, escalabilidad y una clara separación de responsabilidades:

1. **Servidor SP (SimpleSAMLphp):** Dedicado a solicitar la autenticación de los usuarios y obtener sus datos. Configurado para ser accesible desde Internet de forma remota.
2. **Servidor IdP (SimpleSAMLphp):** Actúa como Proveedor de Identidades, verificando los datos para la autenticación. Se conecta con el SP y está alojado en una red segura y de confianza.
3. **Servidor PrivacyIDEA:** Backend utilizado por el IdP para gestionar la autenticación de primer y segundo factor. Se conecta a una base de datos SQL para almacenar información crítica de usuarios y sus tokens FIDO.

---

## 🔑 Hardware de Autenticación Analizado

El proyecto evaluó e integró dispositivos de hardware del ecosistema **Yubico** como autenticadores físicos externos:

* **Serie YubiKey 5:** Soporte multiprotocolo (FIDO2, U2F, OTP, Smart Card) y alta resistencia de hardware.
* **Serie YubiKey 5 FIPS:** Certificación de alto nivel (AAL3 y NIST SP800-63B) adecuada para entornos gubernamentales e industrias reguladas.
* **Serie YubiKey Bio:** Integra reconocimiento de huellas dactilares para una experiencia biométrica sin fricciones.
* **Serie Security Key:** Llaves exclusivas FIDO altamente duraderas con conectores duales (USB-A/NFC, USB-C/NFC).

---

## 🔄 Casos de Uso y Flujos de Autenticación Evaluados

Se diseñaron, implementaron y evaluaron diferentes flujos para demostrar la versatilidad del sistema:

1. **Autenticación Simple (Contraseña):** El SP solicita credenciales, el IdP las verifica contra su base de datos y concede el acceso.
2. **Autenticación 2FA con Google Authenticator (HOTP/TOTP):** Tras validar la contraseña, el IdP contacta a PrivacyIDEA para requerir un código OTP temporal generado en el móvil del usuario.
3. **Autenticación 2FA con FIDO (YubiKey):** Tras el primer factor, PrivacyIDEA solicita la inserción y activación (toque) del token físico FIDO. WebAuthn y CTAP procesan el desafío criptográfico y conceden el acceso de forma inmune al *phishing*.
4. **Escenarios Passwordless (Sin Contraseña):** Uso de credenciales residentes en el dispositivo (WebAuthn) eliminando la necesidad total de introducir nombres de usuario o contraseñas secretas transmitidas por la red.

---

## ⚙️ Despliegue y Configuración

A continuación se detallan los pasos principales realizados para la configuración del entorno en Ubuntu 22.04 LTS:

### 1. Instalación de Dependencias Base (Apache y PHP)
```bash
sudo apt update
sudo add-apt-repository ppa:ondrej/php
sudo apt install apache2
sudo apt install php7.2 php7.1-common php7.2-curl php7.1-ldap php7.1-mysql php7.1-mysql php7.1-pgsql php7.1-memcache php7.1-redis php7.1-json php7.1-mbstring php7.1-sqlite3 php7.2-xml
```

### 2. Instalación de SimpleSAMLphp
Descarga y extracción del entorno:

```bash
tar xzf simplesamlphp-1.19.9.tar.gz
mv simplesamlphp-1.19.9 /var/simplesamlphp
```

Configuración de Apache para servir el entorno y generación de certificados SSL para HTTPS:

```bash
sudo a2ensite simplesamlphp.conf
sudo a2enmod ssl
openssl genrsa -des3 -out /etc/ssl/private/apache.key 2048
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/apache.key -out /etc/ssl/certs/apache.crt
sudo systemctl reload apache2
```

### 3. Instalación de PrivacyIDEA
Se añade el repositorio oficial y se instala en el servidor web:

```bash
sudo add-apt-repository http://lancelot.netknights.it/community/jammy/stable
sudo apt update
sudo apt install privacyidea-apache2
```

Creación del administrador inicial:

```bash
pi-manage admin add admin -e admin@localhost
```

---

## 📊 Resultados y Conclusiones
Tras una evaluación exhaustiva y pruebas prácticas en el entorno desplegado, las conclusiones son rotundas:

* **Seguridad Superior:** FIDO2 elimina el riesgo de ataques de suplantación de identidad, fuerza bruta o interceptación (comunes en contraseñas o SMS), ya que las claves privadas nunca abandonan el hardware del usuario.
* **Usabilidad Mejorada:** Se reduce la fricción del usuario al no tener que recordar o rotar contraseñas complejas, permitiendo un acceso rápido mediante biometría o un simple toque físico.
* **Cumplimiento Normativo:** La elección de PrivacyIDEA como solución de gestión centralizada permite adaptar con éxito el Proveedor de Identidad (IDP) de la Universidad de Huelva a los exigentes requisitos de auditoría y trazabilidad del Esquema Nacional de Seguridad (ENS).

---

## 👨‍🎓 Autor
**Antonio José Muriel Gálvez**  
*Grado en Ingeniería Informática - Universidad de Huelva*  
*Director del TFG: Iñaki Fernández de Viana y González*
