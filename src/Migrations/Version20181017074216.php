<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181017074216 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire DROP nom, DROP prenom, DROP dateprecentretien, DROP dateentretien, DROP motifentretien, DROP conge, DROP absence');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire ADD nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD dateprecentretien DATE DEFAULT NULL, ADD dateentretien DATE NOT NULL, ADD motifentretien LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD conge DATE DEFAULT NULL, ADD absence DATE DEFAULT NULL');
    }
}
