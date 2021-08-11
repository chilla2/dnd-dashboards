<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210805024633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, show_players, description, notes, initiative, show_dm FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, show_players, description, notes, initiative, show_dm) SELECT id, name, show_players, description, notes, initiative, show_dm FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, show_players, description, notes, show_dm FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO item (id, name, show_players, description, notes, show_dm) SELECT id, name, show_players, description, notes, show_dm FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, show_players, description, notes, show_dm FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO location (id, name, show_players, description, notes, show_dm) SELECT id, name, show_players, description, notes, show_dm FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, show_players, description, notes, link, initiative, show_dm FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, link CLOB DEFAULT NULL COLLATE BINARY, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, show_players, description, notes, link, initiative, show_dm) SELECT id, name, show_players, description, notes, link, initiative, show_dm FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, show_players, description, notes FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, description CLOB NOT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO other (id, heading, show_players, description, notes) SELECT id, heading, show_players, description, notes FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
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
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players, initiative, show_dm FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players, initiative, show_dm) SELECT id, name, description, notes, show_players, initiative, show_dm FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players, show_dm FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players, show_dm) SELECT id, name, description, notes, show_players, show_dm FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players, show_dm FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players, show_dm) SELECT id, name, description, notes, show_players, show_dm FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players, link, initiative, show_dm FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players, link, initiative, show_dm) SELECT id, name, description, notes, show_players, link, initiative, show_dm FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('ALTER TABLE other ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
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
