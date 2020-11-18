<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201118204837 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD date_added DATETIME NOT NULL, ADD date_updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD date_added DATETIME NOT NULL, ADD date_updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE post ADD date_added DATETIME NOT NULL, ADD date_updated DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP date_added, DROP date_updated');
        $this->addSql('ALTER TABLE commentaire DROP date_added, DROP date_updated');
        $this->addSql('ALTER TABLE post DROP date_added, DROP date_updated');
    }
}
