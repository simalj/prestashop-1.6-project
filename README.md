# PrestaShop 1.6 Project with Docker and WSL

Tento projekt obsahuje PrestaShop 1.6, ktorý je nakonfigurovaný na spustenie v prostredí Docker a WSL (Windows Subsystem for Linux). Obsahuje aj modul **Štatistika použitých kupónov v objednávkach**.

---

## Požiadavky

- **Windows 10/11** s nainštalovaným WSL2
- **Docker Desktop** s podporou WSL2
- **Git** na klonovanie projektu
- **PHP CLI** (na manuálne testovanie a ladenie)
- **MySQL klient** (voliteľné, na priamy prístup k databáze)

---

## Inštalácia

### 1. Klonovanie projektu

Najskôr si stiahnite projekt z GitHubu:


git clone https://github.com/vas-username/prestashop-1.6-project.git
cd prestashop-1.6-project

### 2. Spustenie Docker kontajnerov

Projekt obsahuje súbor docker-compose.yml, ktorý definuje služby pre PrestaShop a MySQL.

#### Spustite Docker kontajnery:
docker-compose up -d

#### Overte, či sú kontajnery spustené:
docker ps

Mali by ste vidieť kontajnery pre:

PrestaShop (webový server)
MySQL (databáza)

### 3. Prístup k PrestaShopu
Otvorte webový prehliadač a prejdite na:
http://localhost:8080

#### Administrácia PrestaShopu:

URL: http://localhost:8080/admin586htm3z8
Predvolené prihlasovacie údaje:
E-mail: admin@prestashop.com
Heslo: admin123

### 4. Nastavenie modulu "Štatistika použitých kupónov"
#### Nahrajte modul:

Modul statsusedcoupons je už súčasťou projektu v priečinku:
/prestashop/modules/statsusedcoupons

#### Inštalujte modul:
Prihláste sa do administrácie PrestaShopu.
Prejdite na Modules and Services > Modules and Services.
Vyhľadajte modul Statistics of Used Coupons a kliknite na Install.
#### Vymažte cache PrestaShopu:

Prejdite na Advanced Parameters > Performance a kliknite na Clear Cache.

### Použitie
#### Práca s modulom "Štatistika použitých kupónov"
Prejdite do sekcie modulu v administrácii PrestaShopu.
Modul zobrazí tabuľku so štatistikou objednávok, ktoré použili zľavové kupóny.
Tabuľka obsahuje:
ID objednávky
ID kupónu
Hodnotu objednávky bez DPH
Meno a priezvisko zákazníka
Dátum objednávky

## Ladenie a testovanie

### Prístup k databáze MySQL
#### Pripojte sa k databáze cez Docker:
docker exec -it prestashop-mysql mysql -u root -p

#### Použite databázu PrestaShopu:
USE prestashop;

### Práca s WSL
#### Spustenie WSL:
wsl

### Otvorte terminál a spustite WSL:
#### Práca s projektom:
cd /home/jansi/prestashop-1.6-project

### Prejdite do priečinka projektu:
#### Spustenie PHP príkazov:
cd /home/jansi/prestashop-1.6-project

#### Overte syntax PHP súborov:
php -l /path/to/file.php

### Problémy a riešenia
#### 1. Chyba oprávnení pri úprave súborov
Ak nemáte oprávnenie na úpravu súborov v priečinku modules, spustite:
sudo chown -R jansi:jansi 
Po úprave obnovte vlastníka na www-data:
sudo chown -R www-data:www-data 

#### 2. Cache sa neaktualizuje
Vymažte cache PrestaShopu:
rm -rf /home/jansi/prestashop-1.6-project/prestashop/cache/smarty/cache/*

# Licencia
Tento projekt je licencovaný pod licenciou Academic Free License (AFL 3.0). Viac informácií nájdete v súbore LICENSE.txt.

# Kontakt
Ak máte otázky alebo potrebujete pomoc, kontaktujte autora projektu alebo vytvorte issue na GitHube.

