<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181017094227 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire ADD filiaire LONGTEXT NOT NULL, ADD raisonsociale LONGTEXT NOT NULL, ADD etablissement LONGTEXT NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD dateembauche DATE DEFAULT NULL, ADD personnechargeentretien VARCHAR(255) DEFAULT NULL, ADD dernierentretien DATE DEFAULT NULL, ADD dateentretien DATE NOT NULL, ADD convocationenvoye DATE DEFAULT NULL, ADD convocationtype VARCHAR(255) DEFAULT NULL, ADD retourdossier DATE DEFAULT NULL, ADD progressionpro LONGTEXT DEFAULT NULL, ADD actionformation1 LONGTEXT DEFAULT NULL, ADD dateformation1 DATE DEFAULT NULL, ADD actionformation2 LONGTEXT DEFAULT NULL, ADD dateformation2 DATE DEFAULT NULL, ADD certification LONGTEXT DEFAULT NULL, ADD objectifsct LONGTEXT DEFAULT NULL, ADD objectifsmlt LONGTEXT DEFAULT NULL, ADD demandeformation1 LONGTEXT DEFAULT NULL, ADD dateprevi1 DATE DEFAULT NULL, ADD demandeformation2 LONGTEXT DEFAULT NULL, ADD dateprevi2 DATE DEFAULT NULL, ADD avisresponsable LONGTEXT DEFAULT NULL, ADD projet LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE formulaire DROP filiaire, DROP raisonsociale, DROP etablissement, DROP nom, DROP prenom, DROP dateembauche, DROP personnechargeentretien, DROP dernierentretien, DROP dateentretien, DROP convocationenvoye, DROP convocationtype, DROP retourdossier, DROP progressionpro, DROP actionformation1, DROP dateformation1, DROP actionformation2, DROP dateformation2, DROP certification, DROP objectifsct, DROP objectifsmlt, DROP demandeformation1, DROP dateprevi1, DROP demandeformation2, DROP dateprevi2, DROP avisresponsable, DROP projet');
    }
}
