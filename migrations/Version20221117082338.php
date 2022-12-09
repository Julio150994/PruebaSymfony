<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221117082338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE shippings (id INT AUTO_INCREMENT NOT NULL, direccion VARCHAR(120) NOT NULL, portal INT NOT NULL, nombre_calle VARCHAR(80) NOT NULL, piso INT NOT NULL, codigo_postal INT NOT NULL, ciudad VARCHAR(90) NOT NULL, provincia VARCHAR(70) NOT NULL, pais VARCHAR(60) NOT NULL, telefono VARCHAR(9) NOT NULL, observaciones LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL, apellidos VARCHAR(90) NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(80) NOT NULL, password VARCHAR(100) NOT NULL, salario DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE shippings');
        $this->addSql('DROP TABLE user');
    }
}
