<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210806013815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE condition (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, combat_mode BOOLEAN DEFAULT NULL, combat_encounter CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE image (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, file_name VARCHAR(255) DEFAULT NULL)');
        $this->addSql('ALTER TABLE creature ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE creature ADD COLUMN armor_class INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE creature ADD COLUMN hp INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE creature ADD COLUMN initiative_roll INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE item ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE location ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN armor_class INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN hp INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN initiative_roll INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE other ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN image_file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN armor_class INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN hp INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN damage INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN initiative_roll INTEGER DEFAULT NULL');
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
        $this->addSql('DROP TABLE condition');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE image');
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players, initiative, show_dm FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players, initiative, show_dm) SELECT id, name, description, notes, show_players, initiative, show_dm FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players, show_dm FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players, show_dm) SELECT id, name, description, notes, show_players, show_dm FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players, show_dm FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players, show_dm) SELECT id, name, description, notes, show_players, show_dm FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players, link, initiative, show_dm FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players, link, initiative, show_dm) SELECT id, name, description, notes, show_players, link, initiative, show_dm FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, description, notes, show_players FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL, description CLOB NOT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO other (id, heading, description, notes, show_players) SELECT id, heading, description, notes, show_players FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
        $this->addSql('CREATE TEMPORARY TABLE __temp__player AS SELECT id, name, initiative, description, notes, show_dm FROM player');
        $this->addSql('DROP TABLE player');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO player (id, name, initiative, description, notes, show_dm) SELECT id, name, initiative, description, notes, show_dm FROM __temp__player');
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
