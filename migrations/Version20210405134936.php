<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405134936 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE beer_list_beer (beer_list_id INT NOT NULL, beer_id INT NOT NULL, INDEX IDX_A45DB0B5B60027A (beer_list_id), INDEX IDX_A45DB0BD0989053 (beer_id), PRIMARY KEY(beer_list_id, beer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE beer_list_beer ADD CONSTRAINT FK_A45DB0B5B60027A FOREIGN KEY (beer_list_id) REFERENCES beer_list (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE beer_list_beer ADD CONSTRAINT FK_A45DB0BD0989053 FOREIGN KEY (beer_id) REFERENCES beer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE beer_list ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE beer_list ADD CONSTRAINT FK_4C3CA3C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4C3CA3C5A76ED395 ON beer_list (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE beer_list_beer');
        $this->addSql('ALTER TABLE beer_list DROP FOREIGN KEY FK_4C3CA3C5A76ED395');
        $this->addSql('DROP INDEX IDX_4C3CA3C5A76ED395 ON beer_list');
        $this->addSql('ALTER TABLE beer_list DROP user_id');
    }
}
