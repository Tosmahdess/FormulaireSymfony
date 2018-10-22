<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181022130910 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire CHANGE raisonsociale raisonsociale LONGTEXT DEFAULT NULL, CHANGE etablissement etablissement LONGTEXT DEFAULT NULL, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE dateentretien dateentretien DATE DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire CHANGE raisonsociale raisonsociale LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE etablissement etablissement LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE dateentretien dateentretien DATE NOT NULL');
    }
}
