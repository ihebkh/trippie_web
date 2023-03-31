<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230331145807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chauffeur DROP FOREIGN KEY fk_role_chauffeur');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY fk_role_client');
        $this->addSql('ALTER TABLE locateur DROP FOREIGN KEY fk_role_locateur');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_part');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY fk_utilisateur_role');
        $this->addSql('DROP TABLE chauffeur');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE locateur');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE rating_cov');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE co_voiturage MODIFY id_co INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON co_voiturage');
        $this->addSql('ALTER TABLE co_voiturage CHANGE depart depart VARCHAR(50) NOT NULL, CHANGE destination destination VARCHAR(50) NOT NULL, CHANGE cov_img cov_img VARCHAR(255) DEFAULT NULL, CHANGE id_co id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE co_voiturage ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chauffeur (id_ch INT AUTO_INCREMENT NOT NULL, id_role INT NOT NULL, num_permis VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, marque_voiture VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, couleur_voiture VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, immatriculation VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_role_chauffeur (id_role), PRIMARY KEY(id_ch)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (id_client INT AUTO_INCREMENT NOT NULL, id_role INT NOT NULL, email INT NOT NULL, password INT NOT NULL, INDEX fk_role_client (id_role), PRIMARY KEY(id_client)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE locateur (id_loc INT AUTO_INCREMENT NOT NULL, id_role INT NOT NULL, nom_agence VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_role_locateur (id_role), PRIMARY KEY(id_loc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participation (id_part INT AUTO_INCREMENT NOT NULL, id_co INT NOT NULL, nmbr_place_part INT NOT NULL, INDEX fk_part (id_co), PRIMARY KEY(id_part)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rating_cov (id_rating INT AUTO_INCREMENT NOT NULL, Ratt INT NOT NULL, id_co INT NOT NULL, PRIMARY KEY(id_rating)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE role (id_role INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_role)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utilisateur (cin VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, role INT NOT NULL, nom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_utilisateur_role (role), PRIMARY KEY(cin)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE chauffeur ADD CONSTRAINT fk_role_chauffeur FOREIGN KEY (id_role) REFERENCES role (id_role) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT fk_role_client FOREIGN KEY (id_role) REFERENCES role (id_role) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE locateur ADD CONSTRAINT fk_role_locateur FOREIGN KEY (id_role) REFERENCES role (id_role) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_part FOREIGN KEY (id_co) REFERENCES co_voiturage (id_co) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT fk_utilisateur_role FOREIGN KEY (role) REFERENCES role (id_role) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE co_voiturage MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON co_voiturage');
        $this->addSql('ALTER TABLE co_voiturage CHANGE depart depart VARCHAR(200) NOT NULL, CHANGE destination destination VARCHAR(200) NOT NULL, CHANGE cov_img cov_img VARCHAR(255) DEFAULT \'def.png\', CHANGE id id_co INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE co_voiturage ADD PRIMARY KEY (id_co)');
    }
}
