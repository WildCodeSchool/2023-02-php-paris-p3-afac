<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230614072216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist ADD birth_date VARCHAR(255) NOT NULL, ADD death_date VARCHAR(255) NOT NULL, DROP date_of_birth, DROP date_of_death');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist ADD date_of_birth VARCHAR(255) NOT NULL, ADD date_of_death VARCHAR(255) NOT NULL, DROP birth_date, DROP death_date');
    }
}
