<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200509202833 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE doctor_social_networks (id INT AUTO_INCREMENT NOT NULL, doctor_id INT NOT NULL, social_networks_id INT NOT NULL, links VARCHAR(255) NOT NULL, INDEX IDX_EFBADBD287F4FB17 (doctor_id), INDEX IDX_EFBADBD215E9FC52 (social_networks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratory_social_networks (id INT AUTO_INCREMENT NOT NULL, laboratory_id INT NOT NULL, social_networks_id INT NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_DA27CD332F2A371E (laboratory_id), INDEX IDX_DA27CD3315E9FC52 (social_networks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacy_social_networks (id INT AUTO_INCREMENT NOT NULL, pharmacy_id INT NOT NULL, social_networks_id INT NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_715A76D68A94ABE2 (pharmacy_id), INDEX IDX_715A76D615E9FC52 (social_networks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE doctor_social_networks ADD CONSTRAINT FK_EFBADBD287F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id)');
        $this->addSql('ALTER TABLE doctor_social_networks ADD CONSTRAINT FK_EFBADBD215E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id)');
        $this->addSql('ALTER TABLE laboratory_social_networks ADD CONSTRAINT FK_DA27CD332F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE laboratory_social_networks ADD CONSTRAINT FK_DA27CD3315E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id)');
        $this->addSql('ALTER TABLE pharmacy_social_networks ADD CONSTRAINT FK_715A76D68A94ABE2 FOREIGN KEY (pharmacy_id) REFERENCES pharmacy (id)');
        $this->addSql('ALTER TABLE pharmacy_social_networks ADD CONSTRAINT FK_715A76D615E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id)');
        $this->addSql('ALTER TABLE users CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE laboratory CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE doctor CHANGE picture_profil picture_profil VARCHAR(255) DEFAULT NULL, CHANGE tarif_min tarif_min DOUBLE PRECISION DEFAULT NULL, CHANGE tarif_max tarif_max DOUBLE PRECISION DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE pharmacy CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE articles CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE categories CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE drugs_consomers CHANGE age_min age_min INT DEFAULT NULL, CHANGE age_max age_max INT DEFAULT NULL, CHANGE name_consomers name_consomers VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE location CHANGE latitude latitude DOUBLE PRECISION DEFAULT NULL, CHANGE longitude longitude DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE members CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE news CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE quality_services CHANGE icon icon VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE services CHANGE icon icon VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE social_networks DROP links, DROP slug');
        $this->addSql('ALTER TABLE users_blog CHANGE avatar avatar VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE doctor_social_networks');
        $this->addSql('DROP TABLE laboratory_social_networks');
        $this->addSql('DROP TABLE pharmacy_social_networks');
        $this->addSql('ALTER TABLE articles CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE featured_image featured_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categories CHANGE file_name file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE commentaires CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE doctor CHANGE picture_profil picture_profil VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_min tarif_min DOUBLE PRECISION DEFAULT \'NULL\', CHANGE tarif_max tarif_max DOUBLE PRECISION DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE drugs_consomers CHANGE age_min age_min INT DEFAULT NULL, CHANGE age_max age_max INT DEFAULT NULL, CHANGE name_consomers name_consomers VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE laboratory CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE image_name image_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE location CHANGE latitude latitude DOUBLE PRECISION DEFAULT \'NULL\', CHANGE longitude longitude DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE members CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE news CHANGE featured_image featured_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE pharmacy CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE quality_services CHANGE icon icon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE services CHANGE icon icon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE social_networks ADD links VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE users_blog CHANGE file_name file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE avatar avatar VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
