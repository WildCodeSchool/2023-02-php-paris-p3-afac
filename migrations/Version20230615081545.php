<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230615081545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist ADD born_at VARCHAR(255) NOT NULL, ADD dead_at VARCHAR(255) NOT NULL, DROP birth_date, DROP death_date');
        $this->addSql('ALTER TABLE work CHANGE publication_date published_at VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE work CHANGE published_at publication_date VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE artist ADD birth_date VARCHAR(255) NOT NULL, ADD death_date VARCHAR(255) NOT NULL, DROP born_at, DROP dead_at');
    }
}
