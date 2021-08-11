<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210809200243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creature ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_9CFF9D6D99E6F5DF');
        $this->addSql('DROP INDEX IDX_9CFF9D6DD6E2FADC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_player AS SELECT encounter_id, player_id FROM encounter_player');
        $this->addSql('DROP TABLE encounter_player');
        $this->addSql('CREATE TABLE encounter_player (encounter_id INTEGER NOT NULL, player_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, player_id), CONSTRAINT FK_9CFF9D6DD6E2FADC FOREIGN KEY (encounter_id) REFERENCES encounter (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9CFF9D6D99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO encounter_player (encounter_id, player_id) SELECT encounter_id, player_id FROM __temp__encounter_player');
        $this->addSql('DROP TABLE __temp__encounter_player');
        $this->addSql('CREATE INDEX IDX_9CFF9D6D99E6F5DF ON encounter_player (player_id)');
        $this->addSql('CREATE INDEX IDX_9CFF9D6DD6E2FADC ON encounter_player (encounter_id)');
        $this->addSql('DROP INDEX IDX_A2EB62BACA7D6B89');
        $this->addSql('DROP INDEX IDX_A2EB62BAD6E2FADC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_npc AS SELECT encounter_id, npc_id FROM encounter_npc');
        $this->addSql('DROP TABLE encounter_npc');
        $this->addSql('CREATE TABLE encounter_npc (encounter_id INTEGER NOT NULL, npc_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, npc_id), CONSTRAINT FK_A2EB62BAD6E2FADC FOREIGN KEY (encounter_id) REFERENCES encounter (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_A2EB62BACA7D6B89 FOREIGN KEY (npc_id) REFERENCES npc (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO encounter_npc (encounter_id, npc_id) SELECT encounter_id, npc_id FROM __temp__encounter_npc');
        $this->addSql('DROP TABLE __temp__encounter_npc');
        $this->addSql('CREATE INDEX IDX_A2EB62BACA7D6B89 ON encounter_npc (npc_id)');
        $this->addSql('CREATE INDEX IDX_A2EB62BAD6E2FADC ON encounter_npc (encounter_id)');
        $this->addSql('DROP INDEX IDX_DCDB93C1F9AB048');
        $this->addSql('DROP INDEX IDX_DCDB93C1D6E2FADC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_creature AS SELECT encounter_id, creature_id FROM encounter_creature');
        $this->addSql('DROP TABLE encounter_creature');
        $this->addSql('CREATE TABLE encounter_creature (encounter_id INTEGER NOT NULL, creature_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, creature_id), CONSTRAINT FK_DCDB93C1D6E2FADC FOREIGN KEY (encounter_id) REFERENCES encounter (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_DCDB93C1F9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO encounter_creature (encounter_id, creature_id) SELECT encounter_id, creature_id FROM __temp__encounter_creature');
        $this->addSql('DROP TABLE __temp__encounter_creature');
        $this->addSql('CREATE INDEX IDX_DCDB93C1F9AB048 ON encounter_creature (creature_id)');
        $this->addSql('CREATE INDEX IDX_DCDB93C1D6E2FADC ON encounter_creature (encounter_id)');
        $this->addSql('ALTER TABLE item ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE location ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE npc ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE other ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD COLUMN show_dm BOOLEAN DEFAULT NULL');
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
        $this->addSql('CREATE TEMPORARY TABLE __temp__creature AS SELECT id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at FROM creature');
        $this->addSql('DROP TABLE creature');
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO creature (id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at) SELECT id, name, description, notes, show_players, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at FROM __temp__creature');
        $this->addSql('DROP TABLE __temp__creature');
        $this->addSql('DROP INDEX IDX_DCDB93C1D6E2FADC');
        $this->addSql('DROP INDEX IDX_DCDB93C1F9AB048');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_creature AS SELECT encounter_id, creature_id FROM encounter_creature');
        $this->addSql('DROP TABLE encounter_creature');
        $this->addSql('CREATE TABLE encounter_creature (encounter_id INTEGER NOT NULL, creature_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, creature_id))');
        $this->addSql('INSERT INTO encounter_creature (encounter_id, creature_id) SELECT encounter_id, creature_id FROM __temp__encounter_creature');
        $this->addSql('DROP TABLE __temp__encounter_creature');
        $this->addSql('CREATE INDEX IDX_DCDB93C1D6E2FADC ON encounter_creature (encounter_id)');
        $this->addSql('CREATE INDEX IDX_DCDB93C1F9AB048 ON encounter_creature (creature_id)');
        $this->addSql('DROP INDEX IDX_A2EB62BAD6E2FADC');
        $this->addSql('DROP INDEX IDX_A2EB62BACA7D6B89');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_npc AS SELECT encounter_id, npc_id FROM encounter_npc');
        $this->addSql('DROP TABLE encounter_npc');
        $this->addSql('CREATE TABLE encounter_npc (encounter_id INTEGER NOT NULL, npc_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, npc_id))');
        $this->addSql('INSERT INTO encounter_npc (encounter_id, npc_id) SELECT encounter_id, npc_id FROM __temp__encounter_npc');
        $this->addSql('DROP TABLE __temp__encounter_npc');
        $this->addSql('CREATE INDEX IDX_A2EB62BAD6E2FADC ON encounter_npc (encounter_id)');
        $this->addSql('CREATE INDEX IDX_A2EB62BACA7D6B89 ON encounter_npc (npc_id)');
        $this->addSql('DROP INDEX IDX_9CFF9D6DD6E2FADC');
        $this->addSql('DROP INDEX IDX_9CFF9D6D99E6F5DF');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_player AS SELECT encounter_id, player_id FROM encounter_player');
        $this->addSql('DROP TABLE encounter_player');
        $this->addSql('CREATE TABLE encounter_player (encounter_id INTEGER NOT NULL, player_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, player_id))');
        $this->addSql('INSERT INTO encounter_player (encounter_id, player_id) SELECT encounter_id, player_id FROM __temp__encounter_player');
        $this->addSql('DROP TABLE __temp__encounter_player');
        $this->addSql('CREATE INDEX IDX_9CFF9D6DD6E2FADC ON encounter_player (encounter_id)');
        $this->addSql('CREATE INDEX IDX_9CFF9D6D99E6F5DF ON encounter_player (player_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__item AS SELECT id, name, description, notes, show_players, image_name, image_size, updated_at FROM item');
        $this->addSql('DROP TABLE item');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO item (id, name, description, notes, show_players, image_name, image_size, updated_at) SELECT id, name, description, notes, show_players, image_name, image_size, updated_at FROM __temp__item');
        $this->addSql('DROP TABLE __temp__item');
        $this->addSql('CREATE TEMPORARY TABLE __temp__location AS SELECT id, name, description, notes, show_players, image_name, image_size, updated_at FROM location');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO location (id, name, description, notes, show_players, image_name, image_size, updated_at) SELECT id, name, description, notes, show_players, image_name, image_size, updated_at FROM __temp__location');
        $this->addSql('DROP TABLE __temp__location');
        $this->addSql('CREATE TEMPORARY TABLE __temp__npc AS SELECT id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at FROM npc');
        $this->addSql('DROP TABLE npc');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, link CLOB DEFAULT NULL, initiative BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO npc (id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at) SELECT id, name, description, notes, show_players, link, initiative, armor_class, hp, initiative_roll, conditions, image_name, image_size, updated_at FROM __temp__npc');
        $this->addSql('DROP TABLE __temp__npc');
        $this->addSql('CREATE TEMPORARY TABLE __temp__other AS SELECT id, heading, description, notes, show_players, image_name, updated_at FROM other');
        $this->addSql('DROP TABLE other');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL, description CLOB NOT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO other (id, heading, description, notes, show_players, image_name, updated_at) SELECT id, heading, description, notes, show_players, image_name, updated_at FROM __temp__other');
        $this->addSql('DROP TABLE __temp__other');
        $this->addSql('CREATE TEMPORARY TABLE __temp__player AS SELECT id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_name, image_size, updated_at FROM player');
        $this->addSql('DROP TABLE player');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, initiative BOOLEAN NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, damage INTEGER DEFAULT NULL, initiative_roll INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO player (id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_name, image_size, updated_at) SELECT id, name, initiative, description, notes, armor_class, hp, damage, initiative_roll, conditions, image_name, image_size, updated_at FROM __temp__player');
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
