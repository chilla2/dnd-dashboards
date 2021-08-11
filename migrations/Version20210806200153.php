<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210806200153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creature ADD COLUMN image_size INTEGER DEFAULT NULL');
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, combat_mode, combat_encounter, updated_at, image_name FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, combat_mode BOOLEAN DEFAULT NULL, combat_encounter CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, combat_mode, combat_encounter, updated_at, image_name) SELECT id, combat_mode, combat_encounter, updated_at, image_name FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players, updated_at, image_name FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, image_size INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players, updated_at, image_name) SELECT id, name, description, notes, show_players, updated_at, image_name FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players, updated_at, image_name FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, image_size INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players, updated_at, image_name) SELECT id, name, description, notes, show_players, updated_at, image_name FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, link, initiative, show_players, armor_class, hp, initiative_roll, conditions, updated_at, image_name FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, link CLOB DEFAULT NULL COLLATE BINARY, initiative BOOLEAN DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, image_size INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, link, initiative, show_players, armor_class, hp, initiative_roll, conditions, updated_at, image_name) SELECT id, name, description, notes, link, initiative, show_players, armor_class, hp, initiative_roll, conditions, updated_at, image_name FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, show_players, description, notes, image_file_name, updated_at, image_name FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, description CLOB NOT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, image_file_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO other (id, heading, show_players, description, notes, image_file_name, updated_at, image_name) SELECT id, heading, show_players, description, notes, image_file_name, updated_at, image_name FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
        $this->addSql('CREATE TEMPORARY TABLE __temp__player AS SELECT id, name, initiative, description, notes, image_file_name, armor_class, hp, damage, initiative_roll, conditions FROM player');
        $this->addSql('DROP TABLE player');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, damage INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO player (id, name, initiative, description, notes, image_name, armor_class, hp, damage, initiative_roll, conditions) SELECT id, name, initiative, description, notes, image_file_name, armor_class, hp, damage, initiative_roll, conditions FROM __temp__player');
        $this->addSql('DROP TABLE __temp__player');
        $this->addSql('DROP INDEX UNIQ_F454B6729EE1950E');
        $this->addSql('CREATE TEMPORARY TABLE __temp__private_dashboard AS SELECT id, public_dashboard_id, combat_mode, events FROM private_dashboard');
        $this->addSql('DROP TABLE private_dashboard');
        $this->addSql('CREATE TABLE private_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, public_dashboard_id INTEGER NOT NULL, combat_mode BOOLEAN NOT NULL, events CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , CONSTRAINT FK_F454B6729EE1950E FOREIGN KEY (public_dashboard_id) REFERENCES public_dashboard (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO private_dashboard (id, public_dashboard_id, combat_mode, events) SELECT id, public_dashboard_id, combat_mode, events FROM __temp__private_dashboard');
        $this->addSql('DROP TABLE __temp__private_dashboard');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F454B6729EE1950E ON private_dashboard (public_dashboard_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at) SELECT id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, combat_mode, combat_encounter, image_name, updated_at FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, combat_mode BOOLEAN DEFAULT NULL, combat_encounter CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, combat_mode, combat_encounter, image_name, updated_at) SELECT id, combat_mode, combat_encounter, image_name, updated_at FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players, image_name, updated_at FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players, image_name, updated_at) SELECT id, name, description, notes, show_players, image_name, updated_at FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players, image_name, updated_at FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players, image_name, updated_at) SELECT id, name, description, notes, show_players, image_name, updated_at FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at) SELECT id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, updated_at FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, description, notes, show_players, image_file_name, updated_at, image_name FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL, description CLOB NOT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO other (id, heading, description, notes, show_players, image_file_name, updated_at, image_name) SELECT id, heading, description, notes, show_players, image_file_name, updated_at, image_name FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
        $this->addSql('CREATE TEMPORARY TABLE __temp__player AS SELECT id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_name FROM player');
        $this->addSql('DROP TABLE player');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, damage INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_file_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO player (id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_file_name) SELECT id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_name FROM __temp__player');
        $this->addSql('DROP TABLE __temp__player');
        $this->addSql('DROP INDEX UNIQ_F454B6729EE1950E');
        $this->addSql('CREATE TEMPORARY TABLE __temp__private_dashboard AS SELECT id, public_dashboard_id, combat_mode, events FROM private_dashboard');
        $this->addSql('DROP TABLE private_dashboard');
        $this->addSql('CREATE TABLE private_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, public_dashboard_id INTEGER NOT NULL, combat_mode BOOLEAN NOT NULL, events CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO private_dashboard (id, public_dashboard_id, combat_mode, events) SELECT id, public_dashboard_id, combat_mode, events FROM __temp__private_dashboard');
        $this->addSql('DROP TABLE __temp__private_dashboard');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F454B6729EE1950E ON private_dashboard (public_dashboard_id)');
    }
}
