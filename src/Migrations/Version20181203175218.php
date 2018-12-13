<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181203175218 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE animal_cliente (cliente_id INT NOT NULL, animal_id INT NOT NULL, INDEX IDX_7BC3F41FDE734E51 (cliente_id), INDEX IDX_7BC3F41F8E962C16 (animal_id), PRIMARY KEY(cliente_id, animal_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal_cliente ADD CONSTRAINT FK_7BC3F41FDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal_cliente ADD CONSTRAINT FK_7BC3F41F8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE raca ADD nome VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE cliente ADD endereco_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B251BB76823 FOREIGN KEY (endereco_id) REFERENCES endereco (id)');
        $this->addSql('CREATE INDEX IDX_F41C9B251BB76823 ON cliente (endereco_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE animal_cliente');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B251BB76823');
        $this->addSql('DROP INDEX IDX_F41C9B251BB76823 ON cliente');
        $this->addSql('ALTER TABLE cliente DROP endereco_id');
        $this->addSql('ALTER TABLE raca DROP nome');
    }
}
