<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414155301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE maison (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, description VARCHAR(255) NOT NULL, superficie INT NOT NULL, chambres INT NOT NULL, prix INT NOT NULL, climatisation TINYINT(1) DEFAULT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, vendu TINYINT(1) DEFAULT NULL, date_creation DATETIME NOT NULL, etage INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE maison');
    }
}
