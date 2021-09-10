<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210910044406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE encounter_monster (encounter_id INTEGER NOT NULL, monster_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, monster_id))');
        $this->addSql('CREATE INDEX IDX_2A81A821D6E2FADC ON encounter_monster (encounter_id)');
        $this->addSql('CREATE INDEX IDX_2A81A821C5FF1223 ON encounter_monster (monster_id)');
        $this->addSql('CREATE TABLE monster (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, notes CLOB DEFAULT NULL, show_players BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, initiative INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL --(DC2Type:array)
        , image_name VARCHAR(255) DEFAULT NULL, image_size INTEGER DEFAULT NULL, updated_at DATETIME DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, is_enemy BOOLEAN DEFAULT NULL)');
        $this->addSql('DROP TABLE creature');
        $this->addSql('DROP TABLE encounter_creature');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter AS SELECT id, fighters FROM encounter');
        $this->addSql('DROP TABLE encounter');
        $this->addSql('CREATE TABLE encounter (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, fighters CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO encounter (id, fighters) SELECT id, fighters FROM __temp__encounter');
        $this->addSql('DROP TABLE __temp__encounter');
        $this->addSql('DROP INDEX IDX_C53FC3EED6E2FADC');
        $this->addSql('DROP INDEX IDX_C53FC3EE1136BE75');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_character AS SELECT encounter_id, character_id FROM encounter_character');
        $this->addSql('DROP TABLE encounter_character');
        $this->addSql('CREATE TABLE encounter_character (encounter_id INTEGER NOT NULL, character_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, character_id), CONSTRAINT FK_C53FC3EED6E2FADC FOREIGN KEY (encounter_id) REFERENCES encounter (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_C53FC3EE1136BE75 FOREIGN KEY (character_id) REFERENCES character (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO encounter_character (encounter_id, character_id) SELECT encounter_id, character_id FROM __temp__encounter_character');
        $this->addSql('DROP TABLE __temp__encounter_character');
        $this->addSql('CREATE INDEX IDX_C53FC3EED6E2FADC ON encounter_character (encounter_id)');
        $this->addSql('CREATE INDEX IDX_C53FC3EE1136BE75 ON encounter_character (character_id)');
        $this->addSql('DROP INDEX IDX_A2EB62BAD6E2FADC');
        $this->addSql('DROP INDEX IDX_A2EB62BACA7D6B89');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_npc AS SELECT encounter_id, npc_id FROM encounter_npc');
        $this->addSql('DROP TABLE encounter_npc');
        $this->addSql('CREATE TABLE encounter_npc (encounter_id INTEGER NOT NULL, npc_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, npc_id), CONSTRAINT FK_A2EB62BAD6E2FADC FOREIGN KEY (encounter_id) REFERENCES encounter (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_A2EB62BACA7D6B89 FOREIGN KEY (npc_id) REFERENCES npc (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO encounter_npc (encounter_id, npc_id) SELECT encounter_id, npc_id FROM __temp__encounter_npc');
        $this->addSql('DROP TABLE __temp__encounter_npc');
        $this->addSql('CREATE INDEX IDX_A2EB62BAD6E2FADC ON encounter_npc (encounter_id)');
        $this->addSql('CREATE INDEX IDX_A2EB62BACA7D6B89 ON encounter_npc (npc_id)');
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
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, notes CLOB DEFAULT NULL COLLATE BINARY, show_players BOOLEAN DEFAULT NULL, armor_class INTEGER DEFAULT NULL, hp INTEGER DEFAULT NULL, conditions CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , updated_at DATETIME DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, image_size INTEGER DEFAULT NULL, show_dm BOOLEAN DEFAULT NULL, initiative INTEGER DEFAULT NULL, is_enemy BOOLEAN DEFAULT NULL)');
        $this->addSql('CREATE TABLE encounter_creature (encounter_id INTEGER NOT NULL, creature_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, creature_id))');
        $this->addSql('CREATE INDEX IDX_DCDB93C1D6E2FADC ON encounter_creature (encounter_id)');
        $this->addSql('CREATE INDEX IDX_DCDB93C1F9AB048 ON encounter_creature (creature_id)');
        $this->addSql('DROP TABLE encounter_monster');
        $this->addSql('DROP TABLE monster');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter AS SELECT id, fighters FROM encounter');
        $this->addSql('DROP TABLE encounter');
        $this->addSql('CREATE TABLE encounter (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, fighters CLOB DEFAULT \'NULL --(DC2Type:array)\' COLLATE BINARY --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO encounter (id, fighters) SELECT id, fighters FROM __temp__encounter');
        $this->addSql('DROP TABLE __temp__encounter');
        $this->addSql('DROP INDEX IDX_C53FC3EED6E2FADC');
        $this->addSql('DROP INDEX IDX_C53FC3EE1136BE75');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_character AS SELECT encounter_id, character_id FROM encounter_character');
        $this->addSql('DROP TABLE encounter_character');
        $this->addSql('CREATE TABLE encounter_character (encounter_id INTEGER NOT NULL, character_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, character_id))');
        $this->addSql('INSERT INTO encounter_character (encounter_id, character_id) SELECT encounter_id, character_id FROM __temp__encounter_character');
        $this->addSql('DROP TABLE __temp__encounter_character');
        $this->addSql('CREATE INDEX IDX_C53FC3EED6E2FADC ON encounter_character (encounter_id)');
        $this->addSql('CREATE INDEX IDX_C53FC3EE1136BE75 ON encounter_character (character_id)');
        $this->addSql('DROP INDEX IDX_A2EB62BAD6E2FADC');
        $this->addSql('DROP INDEX IDX_A2EB62BACA7D6B89');
        $this->addSql('CREATE TEMPORARY TABLE __temp__encounter_npc AS SELECT encounter_id, npc_id FROM encounter_npc');
        $this->addSql('DROP TABLE encounter_npc');
        $this->addSql('CREATE TABLE encounter_npc (encounter_id INTEGER NOT NULL, npc_id INTEGER NOT NULL, PRIMARY KEY(encounter_id, npc_id))');
        $this->addSql('INSERT INTO encounter_npc (encounter_id, npc_id) SELECT encounter_id, npc_id FROM __temp__encounter_npc');
        $this->addSql('DROP TABLE __temp__encounter_npc');
        $this->addSql('CREATE INDEX IDX_A2EB62BAD6E2FADC ON encounter_npc (encounter_id)');
        $this->addSql('CREATE INDEX IDX_A2EB62BACA7D6B89 ON encounter_npc (npc_id)');
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
