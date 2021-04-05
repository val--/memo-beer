<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405141529 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE beer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE beer_list_item ADD beer_id INT NOT NULL');
        $this->addSql('ALTER TABLE beer_list_item ADD CONSTRAINT FK_4DA898B8D0989053 FOREIGN KEY (beer_id) REFERENCES beer (id)');
        $this->addSql('CREATE INDEX IDX_4DA898B8D0989053 ON beer_list_item (beer_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beer_list_item DROP FOREIGN KEY FK_4DA898B8D0989053');
        $this->addSql('DROP TABLE beer');
        $this->addSql('DROP INDEX IDX_4DA898B8D0989053 ON beer_list_item');
        $this->addSql('ALTER TABLE beer_list_item DROP beer_id');
    }
}
