<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210806015533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creature ADD COLUMN conditions CLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN conditions CLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN conditions CLOB DEFAULT NULL');
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
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll) SELECT id, name, description, notes, show_players, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players, link, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players, link, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll) SELECT id, name, description, notes, show_players, link, initiative, show_dm, image_file_name, armor_class, hp, initiative_roll FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__player AS SELECT id, name, initiative, description, notes, show_dm, image_file_name, armor_class, hp, damage, initiative_roll FROM player');
        $this->addSql('DROP TABLE player');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, image_file_name VARCHAR(255) DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, damage INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO player (id, name, initiative, description, notes, show_dm, image_file_name, armor_class, hp, damage, initiative_roll) SELECT id, name, initiative, description, notes, show_dm, image_file_name, armor_class, hp, damage, initiative_roll FROM __temp__player');
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
