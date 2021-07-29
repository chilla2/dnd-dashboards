<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210729015433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL)');
        $this->addSql('CREATE TABLE private_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, public_dashboard_id INTEGER NOT NULL, combat_mode BOOLEAN NOT NULL, events CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F454B6729EE1950E ON private_dashboard (public_dashboard_id)');
        $this->addSql('CREATE TABLE public_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, combat_mode BOOLEAN NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, description, notes, show_players FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, description CLOB NOT NULL, notes CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO other (id, heading, description, notes, show_players) SELECT id, heading, description, notes, show_players FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE private_dashboard');
        $this->addSql('DROP TABLE public_dashboard');
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, show_players BOOLEAN NOT NULL, description VARCHAR(255) DEFAULT NULL COLLATE BINARY, notes VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, show_players BOOLEAN NOT NULL, description VARCHAR(255) DEFAULT NULL COLLATE BINARY, notes VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, show_players BOOLEAN NOT NULL, description VARCHAR(255) DEFAULT NULL COLLATE BINARY, notes VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, show_players BOOLEAN NOT NULL, description VARCHAR(255) DEFAULT NULL COLLATE BINARY, notes VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players) SELECT id, name, description, notes, show_players FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, description, notes, show_players FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL, show_players BOOLEAN DEFAULT NULL, description VARCHAR(255) NOT NULL COLLATE BINARY, notes VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO other (id, heading, description, notes, show_players) SELECT id, heading, description, notes, show_players FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
    }
}
