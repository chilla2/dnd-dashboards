<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210728224817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE creature (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE location (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE npc (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, show_players BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE other (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, heading VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, notes VARCHAR(255) DEFAULT NULL, show_players BOOLEAN DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE creature');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE npc');
        $this->addSql('DROP TABLE other');
    }
}
