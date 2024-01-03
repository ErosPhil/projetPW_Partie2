<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240103143223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE educateur DROP id_licence');
        $this->addSql('ALTER TABLE licencie DROP id_categorie, DROP id_contact');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE educateur ADD id_licence VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE licencie ADD id_categorie VARCHAR(255) NOT NULL, ADD id_contact VARCHAR(255) NOT NULL');
    }
}
