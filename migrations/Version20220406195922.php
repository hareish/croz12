<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406195922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lang (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lang_user (lang_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_98F39F2EB213FA4 (lang_id), INDEX IDX_98F39F2EA76ED395 (user_id), PRIMARY KEY(lang_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lang_user ADD CONSTRAINT FK_98F39F2EB213FA4 FOREIGN KEY (lang_id) REFERENCES lang (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lang_user ADD CONSTRAINT FK_98F39F2EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lang_user DROP FOREIGN KEY FK_98F39F2EB213FA4');
        $this->addSql('DROP TABLE lang');
        $this->addSql('DROP TABLE lang_user');
    }
}
