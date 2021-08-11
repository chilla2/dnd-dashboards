<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210807041213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE encounter (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, combatants CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE encounter_player (encounter_id INTEGER NOT NULL, player_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, player_id))');
        $this->addSql('CREATE INDEX IDX_9CFF9D6DD6E2FADC ON encounter_player (encounter_id)');
        $this->addSql('CREATE INDEX IDX_9CFF9D6D99E6F5DF ON encounter_player (player_id)');
        $this->addSql('CREATE TABLE encounter_npc (encounter_id INTEGER NOT NULL, npc_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, npc_id))');
        $this->addSql('CREATE INDEX IDX_A2EB62BAD6E2FADC ON encounter_npc (encounter_id)');
        $this->addSql('CREATE INDEX IDX_A2EB62BACA7D6B89 ON encounter_npc (npc_id)');
        $this->addSql('CREATE TABLE encounter_creature (encounter_id INTEGER NOT NULL, creature_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, creature_id))');
        $this->addSql('CREATE INDEX IDX_DCDB93C1D6E2FADC ON encounter_creature (encounter_id)');
        $this->addSql('CREATE INDEX IDX_DCDB93C1F9AB048 ON encounter_creature (creature_id)');
        $this->addSql('ALTER TABLE game ADD COLUMN name VARCHAR(255) DEFAULT NULL');
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
        $this->addSql('DROP TABLE encounter');
        $this->addSql('DROP TABLE encounter_player');
        $this->addSql('DROP TABLE encounter_npc');
        $this->addSql('DROP TABLE encounter_creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, combat_mode, combat_encounter, image_name, image_size, updated_at FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, combat_mode BOOLEAN DEFAULT NULL, combat_encounter CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, combat_mode, combat_encounter, image_name, image_size, updated_at) SELECT id, combat_mode, combat_encounter, image_name, image_size, updated_at FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
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
