<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200527031231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, appointment_type_id INT NOT NULL, begin_at DATETIME NOT NULL, end_at DATETIME DEFAULT NULL, days_of_week JSON DEFAULT NULL, title VARCHAR(255) NOT NULL, is_confirmed TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, INDEX IDX_FE38F844546FBEBB (appointment_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appointment_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_appointment (doctor_id INT NOT NULL, appointment_id INT NOT NULL, INDEX IDX_79074CBF87F4FB17 (doctor_id), INDEX IDX_79074CBFE5B533F9 (appointment_id), PRIMARY KEY(doctor_id, appointment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844546FBEBB FOREIGN KEY (appointment_type_id) REFERENCES appointment_type (id)');
        $this->addSql('ALTER TABLE doctor_appointment ADD CONSTRAINT FK_79074CBF87F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_appointment ADD CONSTRAINT FK_79074CBFE5B533F9 FOREIGN KEY (appointment_id) REFERENCES appointment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE articles CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE categories CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE doctor CHANGE picture_profil picture_profil VARCHAR(255) DEFAULT NULL, CHANGE tarif_min tarif_min DOUBLE PRECISION DEFAULT NULL, CHANGE tarif_max tarif_max DOUBLE PRECISION DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE drugs_consomers CHANGE age_min age_min INT DEFAULT NULL, CHANGE age_max age_max INT DEFAULT NULL, CHANGE name_consomers name_consomers VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE laboratory CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE location CHANGE latitude latitude DOUBLE PRECISION DEFAULT NULL, CHANGE longitude longitude DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE members CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE news CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE pharmacy CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quality_services CHANGE icon icon VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE services CHANGE icon icon VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users_blog CHANGE avatar avatar VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE doctor_appointment DROP FOREIGN KEY FK_79074CBFE5B533F9');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844546FBEBB');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE appointment_type');
        $this->addSql('DROP TABLE doctor_appointment');
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
        $this->addSql('ALTER TABLE users CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE users_blog CHANGE file_name file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE avatar avatar VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
