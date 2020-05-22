<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200424214219 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE doctor_expertise (doctor_id INT NOT NULL, expertise_id INT NOT NULL, INDEX IDX_ED88BE6087F4FB17 (doctor_id), INDEX IDX_ED88BE609D5B92F9 (expertise_id), PRIMARY KEY(doctor_id, expertise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_language (doctor_id INT NOT NULL, language_id INT NOT NULL, INDEX IDX_7C2F038387F4FB17 (doctor_id), INDEX IDX_7C2F038382F1BAF4 (language_id), PRIMARY KEY(doctor_id, language_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_means_payment (doctor_id INT NOT NULL, means_payment_id INT NOT NULL, INDEX IDX_2606175487F4FB17 (doctor_id), INDEX IDX_2606175417157679 (means_payment_id), PRIMARY KEY(doctor_id, means_payment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_social_networks (doctor_id INT NOT NULL, social_networks_id INT NOT NULL, INDEX IDX_EFBADBD287F4FB17 (doctor_id), INDEX IDX_EFBADBD215E9FC52 (social_networks_id), PRIMARY KEY(doctor_id, social_networks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_pratical_infos (doctor_id INT NOT NULL, pratical_infos_id INT NOT NULL, INDEX IDX_5E55035187F4FB17 (doctor_id), INDEX IDX_5E550351ED33D5AD (pratical_infos_id), PRIMARY KEY(doctor_id, pratical_infos_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_refund (doctor_id INT NOT NULL, refund_id INT NOT NULL, INDEX IDX_FFB024D587F4FB17 (doctor_id), INDEX IDX_FFB024D5189801D5 (refund_id), PRIMARY KEY(doctor_id, refund_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drugs_drugs_consomers (drugs_id INT NOT NULL, drugs_consomers_id INT NOT NULL, INDEX IDX_61441E29DA039455 (drugs_id), INDEX IDX_61441E29BDEF6872 (drugs_consomers_id), PRIMARY KEY(drugs_id, drugs_consomers_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drugs_form_drugs (drugs_id INT NOT NULL, form_drugs_id INT NOT NULL, INDEX IDX_B02E6FCFDA039455 (drugs_id), INDEX IDX_B02E6FCF6B391111 (form_drugs_id), PRIMARY KEY(drugs_id, form_drugs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drugs_category_drugs (drugs_id INT NOT NULL, category_drugs_id INT NOT NULL, INDEX IDX_D3B8D6F4DA039455 (drugs_id), INDEX IDX_D3B8D6F46D79102E (category_drugs_id), PRIMARY KEY(drugs_id, category_drugs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratory_category_laboratory (laboratory_id INT NOT NULL, category_laboratory_id INT NOT NULL, INDEX IDX_BF3C3A682F2A371E (laboratory_id), INDEX IDX_BF3C3A6831F11255 (category_laboratory_id), PRIMARY KEY(laboratory_id, category_laboratory_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratory_social_networks (laboratory_id INT NOT NULL, social_networks_id INT NOT NULL, INDEX IDX_DA27CD332F2A371E (laboratory_id), INDEX IDX_DA27CD3315E9FC52 (social_networks_id), PRIMARY KEY(laboratory_id, social_networks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacy_means_payment (pharmacy_id INT NOT NULL, means_payment_id INT NOT NULL, INDEX IDX_A0E0CE478A94ABE2 (pharmacy_id), INDEX IDX_A0E0CE4717157679 (means_payment_id), PRIMARY KEY(pharmacy_id, means_payment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacy_social_networks (pharmacy_id INT NOT NULL, social_networks_id INT NOT NULL, INDEX IDX_715A76D68A94ABE2 (pharmacy_id), INDEX IDX_715A76D615E9FC52 (social_networks_id), PRIMARY KEY(pharmacy_id, social_networks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacy_availabe_drugs (id INT AUTO_INCREMENT NOT NULL, pharmacy_id INT NOT NULL, drugs_id INT NOT NULL, is_available TINYINT(1) NOT NULL, INDEX IDX_632580538A94ABE2 (pharmacy_id), INDEX IDX_63258053DA039455 (drugs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE doctor_expertise ADD CONSTRAINT FK_ED88BE6087F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_expertise ADD CONSTRAINT FK_ED88BE609D5B92F9 FOREIGN KEY (expertise_id) REFERENCES expertise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_language ADD CONSTRAINT FK_7C2F038387F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_language ADD CONSTRAINT FK_7C2F038382F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_means_payment ADD CONSTRAINT FK_2606175487F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_means_payment ADD CONSTRAINT FK_2606175417157679 FOREIGN KEY (means_payment_id) REFERENCES means_payment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_social_networks ADD CONSTRAINT FK_EFBADBD287F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_social_networks ADD CONSTRAINT FK_EFBADBD215E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_pratical_infos ADD CONSTRAINT FK_5E55035187F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_pratical_infos ADD CONSTRAINT FK_5E550351ED33D5AD FOREIGN KEY (pratical_infos_id) REFERENCES pratical_infos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_refund ADD CONSTRAINT FK_FFB024D587F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE doctor_refund ADD CONSTRAINT FK_FFB024D5189801D5 FOREIGN KEY (refund_id) REFERENCES refund (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_drugs_consomers ADD CONSTRAINT FK_61441E29DA039455 FOREIGN KEY (drugs_id) REFERENCES drugs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_drugs_consomers ADD CONSTRAINT FK_61441E29BDEF6872 FOREIGN KEY (drugs_consomers_id) REFERENCES drugs_consomers (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_form_drugs ADD CONSTRAINT FK_B02E6FCFDA039455 FOREIGN KEY (drugs_id) REFERENCES drugs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_form_drugs ADD CONSTRAINT FK_B02E6FCF6B391111 FOREIGN KEY (form_drugs_id) REFERENCES form_drugs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_category_drugs ADD CONSTRAINT FK_D3B8D6F4DA039455 FOREIGN KEY (drugs_id) REFERENCES drugs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drugs_category_drugs ADD CONSTRAINT FK_D3B8D6F46D79102E FOREIGN KEY (category_drugs_id) REFERENCES category_drugs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory_category_laboratory ADD CONSTRAINT FK_BF3C3A682F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory_category_laboratory ADD CONSTRAINT FK_BF3C3A6831F11255 FOREIGN KEY (category_laboratory_id) REFERENCES category_laboratory (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory_social_networks ADD CONSTRAINT FK_DA27CD332F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory_social_networks ADD CONSTRAINT FK_DA27CD3315E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pharmacy_means_payment ADD CONSTRAINT FK_A0E0CE478A94ABE2 FOREIGN KEY (pharmacy_id) REFERENCES pharmacy (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pharmacy_means_payment ADD CONSTRAINT FK_A0E0CE4717157679 FOREIGN KEY (means_payment_id) REFERENCES means_payment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pharmacy_social_networks ADD CONSTRAINT FK_715A76D68A94ABE2 FOREIGN KEY (pharmacy_id) REFERENCES pharmacy (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pharmacy_social_networks ADD CONSTRAINT FK_715A76D615E9FC52 FOREIGN KEY (social_networks_id) REFERENCES social_networks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pharmacy_availabe_drugs ADD CONSTRAINT FK_632580538A94ABE2 FOREIGN KEY (pharmacy_id) REFERENCES pharmacy (id)');
        $this->addSql('ALTER TABLE pharmacy_availabe_drugs ADD CONSTRAINT FK_63258053DA039455 FOREIGN KEY (drugs_id) REFERENCES drugs (id)');
        $this->addSql('ALTER TABLE articles CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE categories CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE doctor ADD profession_id INT NOT NULL, ADD location_id INT NOT NULL, CHANGE id id INT NOT NULL, CHANGE picture_profil picture_profil VARCHAR(255) DEFAULT NULL, CHANGE tarif_min tarif_min DOUBLE PRECISION DEFAULT NULL, CHANGE tarif_max tarif_max DOUBLE PRECISION DEFAULT NULL, CHANGE presentation presentation LONGTEXT DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE doctor ADD CONSTRAINT FK_1FC0F36AFDEF8996 FOREIGN KEY (profession_id) REFERENCES profession (id)');
        $this->addSql('ALTER TABLE doctor ADD CONSTRAINT FK_1FC0F36A64D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE doctor ADD CONSTRAINT FK_1FC0F36ABF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_1FC0F36AFDEF8996 ON doctor (profession_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1FC0F36A64D218E ON doctor (location_id)');
        $this->addSql('ALTER TABLE drugs_consomers CHANGE age_min age_min INT DEFAULT NULL, CHANGE age_max age_max INT DEFAULT NULL, CHANGE name_consomers name_consomers VARCHAR(255) DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE expertise CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE form_drugs CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE laboratory ADD location_id INT NOT NULL, ADD enable TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE laboratory ADD CONSTRAINT FK_FDC719A864D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE laboratory ADD CONSTRAINT FK_FDC719A8BF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FDC719A864D218E ON laboratory (location_id)');
        $this->addSql('ALTER TABLE language CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE location CHANGE latitude latitude DOUBLE PRECISION DEFAULT NULL, CHANGE longitude longitude DOUBLE PRECISION DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE means_payment CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE members CHANGE picture picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE news CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE pharmacy ADD location_id INT NOT NULL, CHANGE id id INT NOT NULL, CHANGE picture picture VARCHAR(255) DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE pharmacy ADD CONSTRAINT FK_D6C15C1E64D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE pharmacy ADD CONSTRAINT FK_D6C15C1EBF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D6C15C1E64D218E ON pharmacy (location_id)');
        $this->addSql('ALTER TABLE pratical_infos CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE profession CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE quality_services CHANGE icon icon VARCHAR(255) DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE refund CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE services CHANGE icon icon VARCHAR(255) DEFAULT NULL, CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE skills CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE social_networks CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE time_slot_open CHANGE enable enable TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE users_blog CHANGE avatar avatar VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE doctor_expertise');
        $this->addSql('DROP TABLE doctor_language');
        $this->addSql('DROP TABLE doctor_means_payment');
        $this->addSql('DROP TABLE doctor_social_networks');
        $this->addSql('DROP TABLE doctor_pratical_infos');
        $this->addSql('DROP TABLE doctor_refund');
        $this->addSql('DROP TABLE drugs_drugs_consomers');
        $this->addSql('DROP TABLE drugs_form_drugs');
        $this->addSql('DROP TABLE drugs_category_drugs');
        $this->addSql('DROP TABLE laboratory_category_laboratory');
        $this->addSql('DROP TABLE laboratory_social_networks');
        $this->addSql('DROP TABLE pharmacy_means_payment');
        $this->addSql('DROP TABLE pharmacy_social_networks');
        $this->addSql('DROP TABLE pharmacy_availabe_drugs');
        $this->addSql('ALTER TABLE articles CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE featured_image featured_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categories CHANGE file_name file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE commentaires CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE doctor DROP FOREIGN KEY FK_1FC0F36AFDEF8996');
        $this->addSql('ALTER TABLE doctor DROP FOREIGN KEY FK_1FC0F36A64D218E');
        $this->addSql('ALTER TABLE doctor DROP FOREIGN KEY FK_1FC0F36ABF396750');
        $this->addSql('DROP INDEX IDX_1FC0F36AFDEF8996 ON doctor');
        $this->addSql('DROP INDEX UNIQ_1FC0F36A64D218E ON doctor');
        $this->addSql('ALTER TABLE doctor DROP profession_id, DROP location_id, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE picture_profil picture_profil VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_min tarif_min DOUBLE PRECISION NOT NULL, CHANGE tarif_max tarif_max DOUBLE PRECISION NOT NULL, CHANGE presentation presentation LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE drugs_consomers CHANGE age_min age_min INT DEFAULT NULL, CHANGE age_max age_max INT DEFAULT NULL, CHANGE name_consomers name_consomers VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE expertise CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE form_drugs CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE laboratory DROP FOREIGN KEY FK_FDC719A864D218E');
        $this->addSql('ALTER TABLE laboratory DROP FOREIGN KEY FK_FDC719A8BF396750');
        $this->addSql('DROP INDEX UNIQ_FDC719A864D218E ON laboratory');
        $this->addSql('ALTER TABLE laboratory DROP location_id, DROP enable, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE language CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE location CHANGE latitude latitude DOUBLE PRECISION DEFAULT \'NULL\', CHANGE longitude longitude DOUBLE PRECISION DEFAULT \'NULL\', CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE means_payment CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE members CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE news CHANGE featured_image featured_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE pharmacy DROP FOREIGN KEY FK_D6C15C1E64D218E');
        $this->addSql('ALTER TABLE pharmacy DROP FOREIGN KEY FK_D6C15C1EBF396750');
        $this->addSql('DROP INDEX UNIQ_D6C15C1E64D218E ON pharmacy');
        $this->addSql('ALTER TABLE pharmacy DROP location_id, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE pratical_infos CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE profession CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE quality_services CHANGE icon icon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE refund CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE services CHANGE icon icon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE skills CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE social_networks CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE time_slot_open CHANGE enable enable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE users_blog CHANGE file_name file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE avatar avatar VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
