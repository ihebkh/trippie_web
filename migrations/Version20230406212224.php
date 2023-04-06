<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406212224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation ADD id_co_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FC7040C7 FOREIGN KEY (id_co_id) REFERENCES co_voiturage (id)');
        $this->addSql('CREATE INDEX IDX_AB55E24FC7040C7 ON participation (id_co_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FC7040C7');
        $this->addSql('DROP INDEX IDX_AB55E24FC7040C7 ON participation');
        $this->addSql('ALTER TABLE participation DROP id_co_id');
    }
}
