<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210730202824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_F454B6729EE1950E');
        $this->addSql('CREATE TEMPORARY TABLE __temp__private_dashboard AS SELECT id, public_dashboard_id, combat_mode, events FROM private_dashboard');
        $this->addSql('DROP TABLE private_dashboard');
        $this->addSql('CREATE TABLE private_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, public_dashboard_id INTEGER NOT NULL, combat_mode BOOLEAN NOT NULL, events CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , CONSTRAINT FK_F454B6729EE1950E FOREIGN KEY (public_dashboard_id) REFERENCES public_dashboard (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO private_dashboard (id, public_dashboard_id, combat_mode, events) SELECT id, public_dashboard_id, combat_mode, events FROM __temp__private_dashboard');
        $this->addSql('DROP TABLE __temp__private_dashboard');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F454B6729EE1950E ON private_dashboard (public_dashboard_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__session AS SELECT id, active, planned_developments, actual_developments, notes, resources FROM session');
        $this->addSql('DROP TABLE session');
        $this->addSql('CREATE TABLE session (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, active BOOLEAN NOT NULL, planned_developments CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , actual_developments CLOB DEFAULT NULL COLLATE BINARY --(DC2Type:array)
        , notes CLOB DEFAULT NULL COLLATE BINARY, resources CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO session (id, active, planned_developments, actual_developments, notes, resources) SELECT id, active, planned_developments, actual_developments, notes, resources FROM __temp__session');
        $this->addSql('DROP TABLE __temp__session');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_F454B6729EE1950E');
        $this->addSql('CREATE TEMPORARY TABLE __temp__private_dashboard AS SELECT id, public_dashboard_id, combat_mode, events FROM private_dashboard');
        $this->addSql('DROP TABLE private_dashboard');
        $this->addSql('CREATE TABLE private_dashboard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, public_dashboard_id INTEGER NOT NULL, combat_mode BOOLEAN NOT NULL, events CLOB DEFAULT NULL --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO private_dashboard (id, public_dashboard_id, combat_mode, events) SELECT id, public_dashboard_id, combat_mode, events FROM __temp__private_dashboard');
        $this->addSql('DROP TABLE __temp__private_dashboard');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F454B6729EE1950E ON private_dashboard (public_dashboard_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__session AS SELECT id, active, planned_developments, actual_developments, notes, resources FROM session');
        $this->addSql('DROP TABLE session');
        $this->addSql('CREATE TABLE session (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, active BOOLEAN NOT NULL, planned_developments CLOB DEFAULT NULL --(DC2Type:array)
        , actual_developments CLOB DEFAULT NULL --(DC2Type:array)
        , notes CLOB DEFAULT NULL, resources CLOB NOT NULL COLLATE BINARY --(DC2Type:array)
        )');
        $this->addSql('INSERT INTO session (id, active, planned_developments, actual_developments, notes, resources) SELECT id, active, planned_developments, actual_developments, notes, resources FROM __temp__session');
        $this->addSql('DROP TABLE __temp__session');
    }
}
