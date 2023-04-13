<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230412220422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD id_voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A40B286D FOREIGN KEY (id_voiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_42C84955A40B286D ON reservation (id_voiture_id)');
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810FB83297E7');
        $this->addSql('DROP INDEX IDX_E9E2810FB83297E7 ON voiture');
        $this->addSql('ALTER TABLE voiture DROP reservation_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A40B286D');
        $this->addSql('DROP INDEX IDX_42C84955A40B286D ON reservation');
        $this->addSql('ALTER TABLE reservation DROP id_voiture_id');
        $this->addSql('ALTER TABLE voiture ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810FB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810FB83297E7 ON voiture (reservation_id)');
    }
}
