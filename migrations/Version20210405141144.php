<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405141144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beer_list_beer DROP FOREIGN KEY FK_A45DB0BD0989053');
        $this->addSql('CREATE TABLE beer_list_item (id INT AUTO_INCREMENT NOT NULL, beer_list_id INT NOT NULL, INDEX IDX_4DA898B85B60027A (beer_list_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE beer_list_item ADD CONSTRAINT FK_4DA898B85B60027A FOREIGN KEY (beer_list_id) REFERENCES beer_list (id)');
        $this->addSql('DROP TABLE beer');
        $this->addSql('DROP TABLE beer_list_beer');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE beer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE beer_list_beer (beer_list_id INT NOT NULL, beer_id INT NOT NULL, INDEX IDX_A45DB0B5B60027A (beer_list_id), INDEX IDX_A45DB0BD0989053 (beer_id), PRIMARY KEY(beer_list_id, beer_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE beer_list_beer ADD CONSTRAINT FK_A45DB0B5B60027A FOREIGN KEY (beer_list_id) REFERENCES beer_list (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE beer_list_beer ADD CONSTRAINT FK_A45DB0BD0989053 FOREIGN KEY (beer_id) REFERENCES beer (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE beer_list_item');
    }
}
