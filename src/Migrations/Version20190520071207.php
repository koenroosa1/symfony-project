<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190520071207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE klant (id INT AUTO_INCREMENT NOT NULL, klantid VARCHAR(3) NOT NULL, klantnaam VARCHAR(30) NOT NULL, telefoon VARCHAR(11) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu_item (id INT AUTO_INCREMENT NOT NULL, gerechtcode VARCHAR(3) NOT NULL, subgerecht_code VARCHAR(4) NOT NULL, menu_itemcode VARCHAR(4) NOT NULL, menu_item VARCHAR(30) NOT NULL, prijs NUMERIC(5, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bestelling (id INT AUTO_INCREMENT NOT NULL, menu_itemcode_id INT NOT NULL, tafel VARCHAR(3) NOT NULL, datum VARCHAR(255) NOT NULL, tijd VARCHAR(255) NOT NULL, aantal INT NOT NULL, prijs NUMERIC(5, 2) NOT NULL, INDEX IDX_3114F830EC7217 (menu_itemcode_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subgerecht (id INT AUTO_INCREMENT NOT NULL, gerechtcode_id INT NOT NULL, gerecht_code VARCHAR(3) NOT NULL, subgerecht_code VARCHAR(4) NOT NULL, subgerecht VARCHAR(25) NOT NULL, UNIQUE INDEX UNIQ_FF110E5E8D4232BE (gerechtcode_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservering (id INT AUTO_INCREMENT NOT NULL, tafel VARCHAR(3) NOT NULL, datum VARCHAR(255) NOT NULL, tijd VARCHAR(255) NOT NULL, klant_id VARCHAR(5) NOT NULL, aantal VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gerecht (id INT AUTO_INCREMENT NOT NULL, gerechtcode VARCHAR(3) NOT NULL, gerecht VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bon (id INT AUTO_INCREMENT NOT NULL, tafel_id INT NOT NULL, datum VARCHAR(255) NOT NULL, tijd VARCHAR(255) NOT NULL, wijze_van_betaling VARCHAR(2) NOT NULL, INDEX IDX_FC7DFD6B77647B1 (tafel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bestelling ADD CONSTRAINT FK_3114F830EC7217 FOREIGN KEY (menu_itemcode_id) REFERENCES menu_item (id)');
        $this->addSql('ALTER TABLE subgerecht ADD CONSTRAINT FK_FF110E5E8D4232BE FOREIGN KEY (gerechtcode_id) REFERENCES gerecht (id)');
        $this->addSql('ALTER TABLE bon ADD CONSTRAINT FK_FC7DFD6B77647B1 FOREIGN KEY (tafel_id) REFERENCES bestelling (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bestelling DROP FOREIGN KEY FK_3114F830EC7217');
        $this->addSql('ALTER TABLE bon DROP FOREIGN KEY FK_FC7DFD6B77647B1');
        $this->addSql('ALTER TABLE subgerecht DROP FOREIGN KEY FK_FF110E5E8D4232BE');
        $this->addSql('DROP TABLE klant');
        $this->addSql('DROP TABLE menu_item');
        $this->addSql('DROP TABLE bestelling');
        $this->addSql('DROP TABLE subgerecht');
        $this->addSql('DROP TABLE reservering');
        $this->addSql('DROP TABLE gerecht');
        $this->addSql('DROP TABLE bon');
    }
}
