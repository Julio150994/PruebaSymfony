<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221117110730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE empresas_repartos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, direccion VARCHAR(140) NOT NULL, email VARCHAR(100) NOT NULL, email_verified_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', telefono VARCHAR(9) NOT NULL, imagen VARCHAR(255) NOT NULL, coste_pedido_normal DOUBLE PRECISION NOT NULL, coste_pedido_urgente DOUBLE PRECISION NOT NULL, deleted TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE empresas_repartos');
    }
}
