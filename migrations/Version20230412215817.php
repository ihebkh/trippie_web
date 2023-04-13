<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230412215817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY fk_idreservation');
        $this->addSql('DROP INDEX fk_idreservation ON reservation');
        $this->addSql('ALTER TABLE reservation DROP id_voiture, CHANGE id_client id_client INT NOT NULL');
        $this->addSql('ALTER TABLE voiture CHANGE id_locateur id_locateur INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD id_voiture INT NOT NULL, CHANGE id_client id_client INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT fk_idreservation FOREIGN KEY (id_voiture) REFERENCES voiture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fk_idreservation ON reservation (id_voiture)');
        $this->addSql('ALTER TABLE voiture CHANGE id_locateur id_locateur INT DEFAULT NULL');
    }
}
