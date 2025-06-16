# 📬 Serveur Mail Personnel — Postfix + Dovecot + Rainloop

Ce projet vous permet de mettre en place un **serveur mail complet auto-hébergé** sur Debian, avec :
- **Postfix** pour le service SMTP (envoi de mails)
- **Dovecot** pour le service IMAP (réception de mails)
- **Rainloop** comme Webmail moderne
- Une interface web d’administration minimaliste en PHP

---

## ✨ Fonctionnalités

- 📤 Envoi de mails via Postfix (supporte authentification SMTP)
- 📥 Réception des mails via Dovecot (IMAP uniquement)
- 🌐 Interface Webmail moderne via Rainloop
- ⚙️ Interface admin PHP pour redémarrer les services
- 🗃️ Gestion des utilisateurs/destinataires via MariaDB

---

## 🖼️ Aperçu de l’interface


**Connexion Webmail (Rainloop)**  
![Rainloop Login](https://i.postimg.cc/5Ndd817X/screen-rainloop-connexion.png)

**Interface de la boite de réception**  
![Compose Mail](https://i.postimg.cc/CxkBMFZS/screen-rainloop.png)

**Interface administrateur (Rainloop)**  
![Admin Modal](https://i.postimg.cc/dQz61VWx/screen-rainloop-admin.png)

**Interface administrateur**  
![Admin Modal](https://i.postimg.cc/0NXkG3Fb/screen-admin.png)

---

## ⚙️ Installation (résumé)

# Installer les services
sudo apt install postfix dovecot-core dovecot-imapd mariadb-server nginx php php-mysql

### Télécharger Rainloop (dans www/rainloop/)
apt install php-curl php-xml curl  \
wget -qO- https://repository.rainloop.net/installer.php | php  \

#### Puis dans le dossier rainloop : 

find . -type d -exec chmod 755 {} \;  \
find . -type f -exec chmod 644 {} \;  \
chown -R www-data:www-data [url du dossier rainloop]  \
### Configurer les fichiers dans config/

### Créer les tables SQL et génerer les tuples** (voir sql/creation_base_messagerie.sql et creation_utilisateurs_messagerie.sql)
mysql -u root -p < sql/creation_base_messagerie.sql...

